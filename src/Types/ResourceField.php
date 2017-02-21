<?php


namespace SamIT\Rancher\Types;


use Nette\PhpGenerator\ClassType;

class ResourceField
{
    public $type;
    public $description;
    public $create;
    public $update;
    public $readOnCreateOnly;
    public $options;

    public static function fromArray(array $config)
    {
        $result = new static();
        foreach($config as $key => $value) {
            $result->{$key} = $value;
        }
        return $result;
    }

    public function addTo(ClassType $type, $name, EnumGenerator $enumGenerator = null)
    {
        $property = $type->addProperty($name);
        if (preg_match('/^(array)\[(?<sub>.*)\]$/', $this->type, $matches)) {
            $type = "{$matches['sub']}[]";
            $property->addComment("@var $type");
            $property->setValue([]);
        } elseif (preg_match('/^map\[(?<sub>.*)\]$/', $this->type, $matches)) {
            $type = ucfirst($matches['sub']) . "Map";
            $property->addComment("@var $type");
            $property->setValue([]);
        } elseif (preg_match('/^reference\[(?<sub>.*)\]$/', $this->type, $matches)) {
            $property
                ->addComment("@var string")
                ->addComment("@api-type " . $this->type);

            if (substr($name, -2, 2) == 'Id') {
                $name = substr($name, 0, -2);
            }

            $type->addMethod('get' . ucfirst($name))->setReturnType($type->getNamespace()->getName() . "\\" . ucfirst($name));


        } elseif ($this->type == 'enum') {
            if (!isset($enumGenerator)) {
                throw new \Exception("This schema uses enums, pass in an EnumGenerator to generate the class it describes.");
            }
            $type->getNamespace()->addUse($enumGenerator->getClassName($name, $name), null, $typeHint);
            $property->addComment("@var $typeHint");
        } else {
            $typeHint = $this->type;
            $property->addComment("@var $typeHint");

        }
    }
}