<?php


namespace SamIT\Rancher\Types;


use SamIT\Rancher\Client;

class Entity implements \JsonSerializable
{
    protected const RESOURCE_FIELDS = [];
    /** @var Client */
    protected $client;


    public $baseType;
    public $actions = [];
    public $links = [];

    public function __construct(Client $client)
    {
        $this->client = $client;
    }


    public static function applyConfig(Entity $entity, array $entityConfig)
    {
        static $errors = [];
        foreach($entityConfig as $key => $value) {
            if (property_exists($entity, $key)) {
                $entity->{$key} = $value;
            } else {
                $error ="Unknown property $key\n";
                if (isset($errors[$error])) {
                    $errors["Unknown property $key in $class\n"] = true;
                    echo $error;
                }
//                throw new \Exception("Unknown property $key");
            }

        }
    }
    public static function createEntity(array $entityConfig, string $namespace, Client $client)
    {
        $class = "$namespace\\" . ucfirst($entityConfig['type']);
        unset($entityConfig['type']);

        $instance = new $class($client);
        static::applyConfig($instance, $entityConfig);

        return $instance;
    }


    public function update()
    {
        return $this->client->updateEntity($this);
    }

    public function reload()
    {
        if (isset($this->links['self'])) {
            return $this->client->reloadEntity($this);
        }
    }

    public function jsonSerialize()
    {
        $data = [];
        foreach (static::RESOURCE_FIELDS as $field) {
            $data[$field] = $this->{$field};
        }
        return $data;
    }
}