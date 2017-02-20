<?php


namespace SamIT\Rancher\Types;


class Entity
{
    public $baseType;
    public $actions = [];
    public $links = [];

    public static function createEntity(array $entityConfig, string $namespace)
    {
        $strict =true;
        $class = "$namespace\\" . ucfirst($entityConfig['type']);
        unset($entityConfig['type']);

        $instance = new $class;
        foreach($entityConfig as $key => $value) {
            if (property_exists($instance, $key)) {
                $instance->{$key} = $value;
            } elseif ($strict) {
                echo "Unknown property $key in $class\n";
//                throw new \Exception("Unknown property $key");
            }

        }
        return $instance;
    }

}