<?php


namespace SamIT\Rancher;


use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpLiteral;
use Nette\PhpGenerator\PhpNamespace;
use Rancher\Exception\ResourceNotFoundException;
use SamIT\Rancher\Types\Collection;
use SamIT\Rancher\Types\Entity;
use SamIT\Rancher\Types\EnumGenerator;

class Client
{
    private $endpoint;

    /**
     * Preloaded with some values for Rancher...
     * @var string[] Maps child classes to their parent.
     */
    private $parentClasses = [
        'Registry' => 'StoragePool',
        'Machine' => 'PhysicalHost',
        'Container' => 'Instance',
        'NetworkDriverService' => 'Service',
        'LoadBalancerService' => 'Service',
        'LbConfig' => 'LbTargetConfig',
        'ExternalService' => 'Service',
        'ActiveSetting' => 'Setting',
        'RegistrationToken' => 'Credential',
        'RegistryCredential' => 'Credential',
        'Register' => 'GenericObject'

    ];

    /** @var PhpFile[] */
    private $files = [];

    /** @var ClassType[] */
    private $classes = [];

    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    private $schemaUrl;

    public $namespace;

    public function __construct($endpoint, $key, $secret)
    {
        $this->endpoint = $endpoint;
        $this->httpClient = new \GuzzleHttp\Client([
            'auth' => [$key, $secret]
        ]);

        $this->schemaUrl = $this->httpClient->head($endpoint)->getHeaderLine('X-Api-Schemas');
    }

    public function loadBaseSchema()
    {
        $schemaConfig = json_decode($this->httpClient->get($this->schemaUrl . '/schema')->getBody()->getContents(), true);
        $schema = \SamIT\Rancher\Schema::fromArray($schemaConfig, false);
        $phpFile = $schema->generateSchemaClass("SamIT\\Rancher\\Generated");
        file_put_contents(__DIR__ . "/Generated/{$schema->getClassName()}.php", $phpFile);
        return \SamIT\Rancher\Generated\Schema::fromArray($schemaConfig);
    }

    public function createClasses($directory, $namespace)
    {
        $this->namespace = $namespace;
        $baseSchema = $this->loadBaseSchema();
        $enumGenerator = new \SamIT\Rancher\Types\EnumGenerator();

        $file = new PhpFile();
        $baseNamespace = $file->addNamespace($namespace);
        $entityNamespace = new PhpNamespace($this->getEntityNamespace());
        $collectionNamespace = new PhpNamespace($this->getCollectionNamespace());
        $mapNamespace = new PhpNamespace($this->getMapNamespace());
        $enumNamespace = new PhpNamespace($this->getEnumNamespace());




        $schemas = array_map(function($schemaConfig) use ($baseSchema, $enumGenerator) {
            $schema = $baseSchema::fromArray($schemaConfig);
            $schema->addEnums($enumGenerator);
            return $schema;
        }, json_decode($this->httpClient->get($this->schemaUrl)->getBody()->getContents(), true)['data']);

        $this->classes = $enumGenerator->createClasses($enumNamespace, $this->files);

        $clientClass = $baseNamespace->addClass("Client")->addExtend(__CLASS__);
        $clientClass->addProperty("namespace", "\\$namespace");
        $this->files[$baseNamespace->getName() . '\\' . $clientClass->getName()] = $file;

        /** @var Schema $schema */
        foreach($schemas as $schema) {
            $this->parseSchema(
                $schema,
                $entityNamespace,
                $collectionNamespace,
                $mapNamespace,
                $enumGenerator,
                $clientClass
            );

        }

        // Go over the parent relations.
        foreach($this->parentClasses as $childName => $parentName) {
            $this->configureParent($this->classes[$entityNamespace->getName() . "\\" . $childName],
                $this->classes[$entityNamespace->getName() . "\\" . $parentName]);
        }

        foreach($this->files as $className => $file) {
            $fileName = strtr($className, [$namespace => $directory, '\\' => '/']) . '.php';
            if (!is_dir(dirname($fileName))) {
                mkdir(dirname($fileName), 0777, true);
            }
            echo "Writing $fileName...";
            $bytes = file_put_contents($fileName, $file);
            echo "$bytes written\n";
        }

    }



    /**
     * Creates the classes for a schema.
     * Also updates the hierarchy tree.
     * @param \SamIT\Rancher\Generated\Schema $schema
     * @param PhpNamespace $entityNamespace
     * @param PhpNamespace $collectionNamespace
     * @param EnumGenerator $enumGenerator
     * @param ClassType $client
     */
    private function parseSchema(
        \SamIT\Rancher\Generated\Schema $schema,
        PhpNamespace $entityNamespace,
        PhpNamespace $collectionNamespace,
        PhpNamespace $mapNamespace,
        EnumGenerator $enumGenerator,
        ClassType $client
    ) {
        $file = new PhpFile();
        $baseClass = $schema->generateEntityClass($file->addNamespace($entityNamespace->getName()), $enumGenerator);
        $this->files[$entityNamespace->getName() . '\\' . $baseClass->getName()] = $file;
        $this->classes[$baseClass->getNamespace()->getName() . "\\" . $baseClass->getName()] = $baseClass;

        $file = new PhpFile();
        $collectionClass = $schema->generateCollectionClass(
            $baseClass,
            $file->addNamespace($collectionNamespace->getName()),
            $enumGenerator
        );
        $this->files[$collectionNamespace->getName() . '\\' . $collectionClass->getName()] = $file;

        $file = new PhpFile();
        $mapClass = $schema->generateMapClass(
            $baseClass,
            $file->addNamespace($mapNamespace->getName())
        );
        $this->files[$mapNamespace->getName() . '\\' . $mapClass->getName()] = $file;

        // Add collection retrieval to the main client.
        if (isset($schema->links['collection'])) {
            // Entity has a collection.
            $client->getNamespace()->addUse($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName(), null, $baseClassAlias);
            $client->getNamespace()->addUse($collectionClass->getNamespace()->getName() . '\\' . $collectionClass->getName(), null, $collectionClassAlias);
            $client->addMethod('get' . ucfirst($schema->getPluralName()))
                ->setReturnType($collectionClass->getNamespace()->getName() . '\\' . $collectionClass->getName())
                ->addComment("@return {$baseClassAlias}[]|{$collectionClassAlias}")
                ->setBody(implode("\n", [
                    '$result = $this->retrieveEntities(?, ?);',
                    'if ($result instanceof ?) return $result;',

                ]), [
                    strtr($schema->links['collection'], [$this->endpoint => '']),
                    new PhpLiteral('$limit'),
                    new PhpLiteral($collectionClass->getName())
                ])
                ->addParameter('limit', null)
                    ->setNullable(true)
                    ->setTypeHint('int');


            // Identify class hierarchy.
            $data = $this->retrieve($schema->links['collection'], ['limit' => 1]);
            if (count($data['createTypes']) > 1) {
                unset($data['createTypes'][strtolower($baseClass->getName())]);
                foreach($data['createTypes'] as $type => $url) {
                    $this->parentClasses[ucfirst($type)] = $baseClass->getName();
                }
            }
            // Add find function to main class.
            $client->addMethod('get' . ucfirst($schema->id))
                ->addComment("Find a {$schema->id} by id")
                ->setReturnNullable(false)
                ->setReturnType($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName())
                ->setBody(implode("\n", [
                    '$result = $this->retrieveEntity(?, $id);',
                    'if ($result instanceof ?)',
                    '    return $result;',
                    'else',
                    '    throw new \Exception("Entity not found.");'
                ]), [
                    strtr($schema->links['collection'], [$this->endpoint => '']),
                    new PhpLiteral($baseClass->getName())
                ])
                ->addParameter('id')->setTypeHint('string')

                ;
        }
        $this->classes[$collectionClass->getNamespace()->getName() . "\\" . $collectionClass->getName()] = $collectionClass;




    }


    private function configureParent(ClassType $child, ClassType $parent)
    {
        $child->setExtends($parent->getNamespace()->getName() . "\\" . $parent->getName());

        // Remove redundant properties.
        $properties = $child->getProperties();
        foreach($properties as $name => $property) {
            if (isset($parent->getProperties()[$name])
            && $parent->getProperty($name) == $property) {
                unset($properties[$name]);
            }
        }
        $child->setProperties($properties);

        // Remove redundant methods.
        $methods = $child->getMethods();
        $log = $child->getName() == "LoadBalancerService";
        foreach($methods as $name => $childMethod) {
            if (isset($parent->getMethods()[$name])) {
                unset($methods[$name]);
                $parentMethod = $parent->getMethod($name);

                // Check if the return type is different.
                if ($parentMethod->getReturnType() != $childMethod->getReturnType()
                    && isset($this->parentClasses[Helpers::extractShortName($childMethod->getReturnType())])
                    && $this->parentClasses[Helpers::extractShortName($childMethod->getReturnType())]
                        == Helpers::extractShortName($parentMethod->getReturnType())
                ) {
                    // Child return type is more specific than parent return type, PHP does not yet support this.
                    // Use class annotation instead.
                    $child->getNamespace()->addUse($childMethod->getReturnType(), null, $short);
                    $child->addComment("@method $short $name Implementation in parent.");
//                    var_dump($parentMethod->getReturnType());
//                    var_dump($childMethod->getReturnType());
//
//                    die();
                }

            }

        }
        $child->setMethods($methods);
//        var_dump(array_keys($methods));
//        var_dump($child->getMethods());
//        var_dump((string) $child);
//        if ($log) { die(); }

    }


    protected function retrieve($url, array $params = [])
    {
        if (strpos($url, '://') === false) {
            $baseUrl = $this->endpoint . $url;
        } else {
            $baseUrl = $url;
        }

        return \GuzzleHttp\json_decode($this->httpClient->get($baseUrl, [
            'query' => $params
        ])->getBody(), true);
    }

    /**
     * @param $url
     * @param int|null|null $limit
     * @return Entity[]|Collection
     */
    public function retrieveEntities($url, ?int $limit = null) : Collection
    {
        $queryArgs = [];
        if (isset($limit)) {
            $queryArgs['limit'] = $limit;
        }

        $entityConfigs = $this->retrieve($url, $queryArgs);
        if (isset($entityConfigs['type']) && $entityConfigs['type'] == 'collection') {
            $collection = Collection::createCollection($entityConfigs['resourceType'], $this->getCollectionNamespace());
            // Iterate over data.
            foreach($entityConfigs['data'] as $entityConfig) {
                $collection->add(Entity::createEntity($entityConfig, $this));
            }

            return $collection;
        }

    }

    /**
     * @param $url
     * @param string $id
     * @return Entity
     */
    public function retrieveEntity($url, string $id) : ?Entity
    {
        $entityConfig = $this->retrieve("$url/$id");
        if (isset($entityConfig['type'])) {
            return Entity::createEntity($entityConfig, $this);
        }

    }

    public function createEntity(Entity $entity)
    {
        $response = $this->httpClient->post($entity::$entityLinks['collection'], [
            'json' => $entity->jsonSerialize(true),
            'exceptions' => false
        ]);
        $responseData = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
        switch($response->getStatusCode()) {
            case 200:
                Entity::applyConfig($entity, $responseData, $this);
                return true;
            case 405:
                echo "Bad method 405";
                break;
            case 422:
                echo "Unprocessable entity\n";

                print_r($entity->jsonSerialize(true));
                echo "---- RESPONSE -----\n";
                print_r($responseData);
                break;
            default:
                echo "---- REQUEST -----\n";
                print_r($entity->jsonSerialize());
                echo "---- RESPONSE -----\n";
                print_r($responseData);
                die();
        }


    }

    public function updateEntity(Entity $entity)
    {
        if (isset($entity->actions['update'])) {
            $response = $this->httpClient->put($entity->actions['update'], [
                'json' => $entity->jsonSerialize(true),
                'exceptions' => false
            ]);
            $responseData = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
            switch($response->getStatusCode()) {
                case 200:
                    Entity::applyConfig($entity, $responseData, $this);
                    return true;
                case 405:
                    echo "Bad method 405";
                    break;
                case 422:
                    echo "Unprocessable entity\n";

                    print_r($entity->jsonSerialize());
                    echo "---- RESPONSE -----\n";
                    print_r($responseData);
                    break;
                default:
                    echo "---- REQUEST -----\n";
                    print_r($entity->jsonSerialize());
                    echo "---- RESPONSE -----\n";
                    print_r($responseData);
                    die();
            }


        } else {
            throw new \Exception("Updating not supported.");
        }


    }

    public function reloadEntity(Entity $entity)
    {
        if (isset($entity->links['self'])) {
            $response = $this->httpClient->get($entity->links['self']);
            if ($response->getStatusCode() === 200) {
                $entityConfig = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
                Entity::applyConfig($entity, $entityConfig);
                return true;
            }
        } else {
            throw new \Exception("Reloading not supported.");
        }
    }


    public function getEntityNamespace()
    {
        return "{$this->namespace}\\Entities";
    }

    public function getCollectionNamespace()
    {
        return "{$this->namespace}\\Collections";
    }

    public function getMapNamespace()
    {
        return "{$this->namespace}\\Maps";
    }

    public function getEnumNamespace()
    {
        return "{$this->namespace}\\Enums";
    }





}