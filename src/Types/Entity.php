<?php


namespace SamIT\Rancher\Types;


use SamIT\Rancher\Client;
use SamIT\Rancher\Generated\Entities\Host;

class Entity implements \JsonSerializable
{
    private $originalAttributes = [];
    protected const RESOURCE_FIELDS = [];
    /** @var Client */
    private $client;


    public $baseType;
    public $actions = [];
    public $links = [];

    /**
     * Entity constructor.
     * Protected constructor to force usage of `Entity::createEntity` or `static::create`
     */
    protected function __construct() {

    }

    protected function client()
    {
        if (!isset($this->client)) {
            throw new \RuntimeException("Client must be set to use this.");
        }
        return $this->client;
    }


    public static function applyConfig(Entity $entity, array $entityConfig, Client $client)
    {
        unset($entityConfig['type']);
        $entity->client = $client;

        foreach($entityConfig as $key => $value) {
            // Check if the value is an array.
            if (is_array($value) && isset($value['type'])) {
                $value = static::createEntity($value, $client);
            } elseif (is_array($value) && array_reduce($value, function($carry, $item) {
                return $carry && is_array($item) && isset($item['type']);
                }, true)
            ) {
                $value = array_map(function($config) use ($client) {
                    return static::createEntity($config, $client);
                }, $value);
            }

            if (property_exists($entity, $key)) {
                $entity->{$key} = $value;
                $entity->originalAttributes[$key] = $value;
            } elseif (!in_array($key, ['createdTS'])) {
                print_r($entityConfig); die();
                throw new \Exception("Unknown property $key in config for " . get_class($entity));
            }

        }
    }

    final public static function createEntity(array $entityConfig, Client $client)
    {
        if (get_called_class() !== __CLASS__) {
            throw new \Exception("Only use Entity::createEntity");
        }
        $class = "{$client->getEntityNamespace()}\\" . ucfirst($entityConfig['type']);

        $instance = new $class($client);
        $instance->client = $client;
        static::applyConfig($instance, $entityConfig, $client);

        return $instance;
    }


    public function updateable() : bool
    {
        return isset($this->actions['update']);
    }
    public function update()
    {
        return $this->client()->updateEntity($this);
    }

    public function reload()
    {
        if (isset($this->links['self'])) {
            return $this->client()->reloadEntity($this);
        }
    }

    public function jsonSerialize($dirtyOnly = false)
    {
        $data = [];
        if ($dirtyOnly) {
            $data['id'] = $this->id;
        }
        foreach (static::RESOURCE_FIELDS as $field) {
            if (!$dirtyOnly || $this->isDirty($field))
            $data[$field] = $this->{$field};
        }
        return $data;
    }

    protected function isDirty($name) {
        return !array_key_exists($name, $this->originalAttributes)
            || json_encode($this->$name) !== json_encode($this->originalAttributes[$name]);
    }

    public function __debugInfo()
    {
        return $this->jsonSerialize();
    }


}