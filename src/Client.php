<?php


namespace SamIT\Rancher;


use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpLiteral;
use Nette\PhpGenerator\PhpNamespace;
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
        $baseSchema = $this->loadBaseSchema();
        $enumGenerator = new \SamIT\Rancher\Types\EnumGenerator();

        $file = new PhpFile();
        $baseNamespace = $file->addNamespace($namespace);
        $entityNamespace = new PhpNamespace("$namespace\\Entities");
        $collectionNamespace = new PhpNamespace("$namespace\\Collections");
        $enumNamespace = new PhpNamespace("$namespace\\Enums");



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
            $this->parseSchema($schema, $entityNamespace, $collectionNamespace, $enumGenerator, $clientClass);

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
        PhpNamespace$collectionNamespace,
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

        // Add collection retrieval to the main client.
        if (isset($schema->links['collection'])) {
            // Entity has a collection.
            $client->getNamespace()->addUse($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName(), null, $baseClassAlias);
            $client->getNamespace()->addUse($collectionClass->getNamespace()->getName() . '\\' . $collectionClass->getName(), null, $collectionClassAlias);
            $client->addMethod('get' . ucfirst($schema->pluralName))
                ->setReturnType($collectionClass->getNamespace()->getName() . '\\' . $collectionClass->getName())
                ->addComment("@return {$baseClassAlias}[]|{$collectionClassAlias}")
                ->setBody('return $this->retrieveEntities(?, ?);', [
                    strtr($schema->links['collection'], [$this->endpoint => '']),
                    new PhpLiteral('$limit')
                ])
                ->addParameter('limit', null)
                    ->setNullable(true)
                    ->setTypeHint('int');


            // Identify class hierarchy.
            $data = $this->retrieveRawEntities($schema->links['collection'], 1);
            if (count($data['createTypes']) > 1) {
                unset($data['createTypes'][strtolower($baseClass->getName())]);
                foreach($data['createTypes'] as $type => $url) {
                    $this->parentClasses[ucfirst($type)] = $baseClass->getName();
                }
            }
        }
        $this->classes[$collectionClass->getNamespace()->getName() . "\\" . $collectionClass->getName()] = $collectionClass;

    }


    private function configureParent(ClassType $child, ClassType $parent)
    {
        $child->setExtends($parent->getNamespace()->getName() . "\\" . $parent->getName());
        $properties = $child->getProperties();
        foreach($properties as $name => $property) {
            if (isset($parent->getProperties()[$name])
            && $parent->getProperties()[$name] == $property) {
                unset($properties[$name]);
            }
        }
        $child->setProperties($properties);
    }


    protected function retrieveRawEntities($url, ?int $limit = null) : array
    {
        if (strpos($url, '://') === false) {
            $baseUrl = $this->endpoint . $url;
        } else {
            $baseUrl = $url;
        }

        $queryArgs = [];
        if (isset($limit)) {
            $queryArgs['limit'] = $limit;
        }


        $response  = $this->httpClient->get($baseUrl, [
            'query' => $queryArgs
        ]);
        return \GuzzleHttp\json_decode($response->getBody(), true);
    }

    /**
     * @param $url
     * @param int|null|null $limit
     * @return Entity[]|Collection
     */
    public function retrieveEntities($url, ?int $limit = null) : Collection
    {

        $entityConfigs = $this->retrieveRawEntities($url, $limit);
        if (isset($entityConfigs['type']) && $entityConfigs['type'] == 'collection') {
            $collection = Collection::createCollection($entityConfigs['resourceType'], $this->namespace . "\\Collections");
            // Iterate over data.
            foreach($entityConfigs['data'] as $entityConfig) {
                $collection->add(Entity::createEntity($entityConfig, $this->namespace . "\\Entities", $this));
            }

            return $collection;
        }

    }

    public function updateEntity(Entity $entity)
    {
        if (isset($entity->actions['update'])) {
            $response = $this->httpClient->put($entity->actions['update'], [
                'json' => $entity->jsonSerialize(),
                'exceptions' => false
            ]);
            $responseData = \GuzzleHttp\json_decode($response->getBody()->getContents(), true);
            switch($response->getStatusCode()) {
                case 200:
                    Entity::applyConfig($entity, $responseData);
                    return true;
                case 405:
                    echo "Bad method 405";
                    break;
                default:
                    var_dump($responseData);
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







}