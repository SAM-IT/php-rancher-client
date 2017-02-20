<?php


namespace SamIT\Rancher;


use Nette\PhpGenerator\PhpFile;
use SamIT\Rancher\Types\Collection;
use SamIT\Rancher\Types\Entity;

class Client
{
    private $endpoint;

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

    public function getSchemaUrl()
    {
        return $this->schemaUrl;
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

        $schemas = array_map(function($schemaConfig) use ($baseSchema, $enumGenerator) {
            $schema = $baseSchema::fromArray($schemaConfig);
            $schema->addEnums($enumGenerator);
            return $schema;
        }, json_decode($this->httpClient->get($this->schemaUrl)->getBody()->getContents(), true)['data']);

        $enumDirectory = "$directory/Enums";
        if (!file_exists($enumDirectory)) {
            mkdir($enumDirectory);
        }
        $enumGenerator->createClasses($enumDirectory, "$namespace\\Enums");

        $entityDirectory = "$directory/Entities";
        if (!file_exists($entityDirectory)) {
            mkdir($entityDirectory);
        }
        $collectionDirectory = "$directory/Collections";
        if (!file_exists($collectionDirectory)) {
            mkdir($collectionDirectory);
        }

        $file = new PhpFile();


        $clientClass = $file->addClass($namespace . "\\Client")->addExtend(__CLASS__);

        $clientClass->addProperty("namespace", "\\$namespace");

        /** @var Schema $schema */
        foreach($schemas as $schema) {
            $class = $schema->generateClass(
                "$namespace\\Entities",
                $enumGenerator,
                $entityDirectory
            );

            $collectionClass = $schema->generateCollectionClass(
                $class->getNamespace()->getName() . "\\" . $class->getName(),
                "$namespace\\Collections",
                $enumGenerator,
                $collectionDirectory
            );

            // Add collection retrieval to the main client.
            if (isset($schema->links['collection'])) {
                // Entity has a collection.
                $clientClass->addMethod('get' . ucfirst($schema->pluralName))
                    ->setReturnType("{$collectionClass->getNamespace()->getName()}\\{$collectionClass->getName()}")
                    ->addComment("@return \\{$class->getNamespace()->getName()}\\{$class->getName()}[]|\\{$collectionClass->getNamespace()->getName()}\\{$collectionClass->getName()}")
                    ->setBody('return $this->retrieveEntities(' . var_export(strtr($schema->links['collection'], [$this->endpoint => '']), true) . ');');
            }


        }

        file_put_contents("$directory/Client.php", $file);





    }

    protected function retrieveEntities($url) : Collection
    {
        $response  = $this->httpClient->get($this->endpoint . $url);

        $entityConfigs = \GuzzleHttp\json_decode($response->getBody(), true);
        if (isset($entityConfigs['type']) && $entityConfigs['type'] == 'collection') {
            $collection = Collection::createCollection($entityConfigs['resourceType'], $this->namespace . "\\Collections");
            // Iterate over data.
            foreach($entityConfigs['data'] as $entityConfig) {
                $collection->add(Entity::createEntity($entityConfig, $this->namespace . "\\Entities"));
            }

            return $collection;
        }

    }







}