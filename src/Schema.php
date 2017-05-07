<?php


namespace SamIT\Rancher;


use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpLiteral;
use Nette\PhpGenerator\PhpNamespace;
use SamIT\Rancher\Types\Collection;
use SamIT\Rancher\Types\Entity;
use SamIT\Rancher\Types\EntityMap;
use SamIT\Rancher\Types\EnumGenerator;
use SamIT\Rancher\Types\ResourceField;

class Schema extends Entity
{


    public $id;
    public $type;
    public $links;

    /** @var ResourceField[] */
    private $resourceFields = [];

    public function __construct()
    {

    }


    public static function fromArray(array $config, $strict = true)
    {
        $object = new static();
        if (isset($config['resourceFields'])) {
            $resourceFields = $config['resourceFields'];
            unset($config['resourceFields']);
        }

        foreach($config as $key => $value) {
            if (property_exists($object, $key)) {
                $object->{$key} = $value;
            } elseif ($strict) {
                var_dump($value);
                throw new \Exception("Unknown property $key");
            }

        }



        if (isset($resourceFields)) {
            foreach ($resourceFields as $key => $def) {
                $object->resourceFields[$key] = ResourceField::fromArray($def);
            }
        }

        return $object;

    }


    public function getClassName() {
        return ucfirst($this->id);
    }

    public function generateSchemaClass($namespace) {
        if ($this->type != 'schema') {
            throw new \Exception("Invalid schema schema");
        }
        $file = new \Nette\PhpGenerator\PhpFile();

        $object = $file->addClass("{$namespace}\\{$this->getClassName()}")
            ->setExtends(__CLASS__);
        $object->addProperty('links')
            ->setValue([])
            ->addComment('@var string[]');

        $this->addFields($object, new EnumGenerator(), new PhpNamespace());

        return $file;


    }

    protected function addIncludeableLinks(ClassType $object)
    {
        return;
        if (isset($this->includeableLinks) && is_array($this->includeableLinks)) {
            foreach ($this->includeableLinks as $name) {

                $methodName = 'get' . ucfirst($name);
                if (!isset($object->getMethods()[$methodName])) {
                    if (substr($name, -3, 3) === 'ses') {
                        $singular = substr($name, 0, -2);
                    } else {
                        $singular = substr($name, 0, -1);
                    }
                    $class = "\\SamIT\\Rancher\\Generated\\Collections\\" . ucfirst($singular) . "Collection";
                    $object->getNamespace()->addUse($class);
                    $object->addMethod($methodName)
                        ->addComment('@api-source Extracted from includeableLinks')
                        ->setReturnType($class)
                        ->addBody('return $this->client()->retrieveEntities($this->links[?]);', [$name]);
                }
            }
        }
    }

    protected function addLinks(ClassType $object)
    {
        $object->addProperty('entityLinks')
            ->setStatic(true)
            ->setValue($this->links)
            ->addComment('@var string[]');

    }
    protected function addFields(ClassType $object, EnumGenerator $enumGenerator, PhpNamespace $mapNamespace, $parent = null)
    {
        $object->addConstant('RESOURCE_FIELDS', array_keys($this->resourceFields))
            ->setVisibility('protected')
            ->addComment('@var string[] The list of fields for this type.');
        /**
         * @var string $name
         * @var  ResourceField $def
         */
        foreach($this->resourceFields as $name => $def) {
            if (isset($parent) && property_exists($parent, $name)) {
                continue;
            }
            $def->addTo($object, $name, $enumGenerator, $mapNamespace);

        }

        return $object;
    }

    /**
     * Generates a schema class from the base schema + config.
     * @param $namespace
     * @param ?EnumGenerator $enumGenerator
     * @return ClassType
     * @throws \Exception
     */
    public function generateEntityClass(
        PhpNamespace $namespace,
        EnumGenerator $enumGenerator,
        PhpNamespace $mapNamespace
    ) : ClassType {
        if (get_class($this) == __CLASS__) {
            throw new \Exception("Unexpected stuff.");
        }
        $object = $namespace->addClass($this->getClassName())
            ->addExtend(Entity::class);

        $namespace->addUse(\SamIT\Rancher\Generated\Client::class);
        $object->addMethod('client')
            ->setVisibility('protected')
            ->setReturnType(\SamIT\Rancher\Generated\Client::class)
            ->setBody('return parent::client();');

        $constructor = $object->addMethod('create');
        $constructor
            ->addBody('$result = new static();')
            ->setStatic(true);


        foreach($this->resourceFields as $key => $field) {
            if ($field->create && !$field->nullable) {
                $constructor->addParameter($key)
                    ->setTypeHint(ResourceField::getPhpType($field->type, $key, $enumGenerator, $mapNamespace));
                $constructor->addBody('$result->? = ?;', [
                    $key, new PhpLiteral("$$key")
                ]);
            }
        }
        $constructor->addBody('return $result;');

        $this->addFields($object, $enumGenerator, $mapNamespace);
        $this->addLinks($object);

        $this->addIncludeableLinks($object);
        return $object;
    }


    public function generateCollectionClass(
        ClassType $baseClass,
        PhpNamespace $namespace,
        EnumGenerator $enumGenerator
    ) : ClassType {
        $namespace->addUse($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName(), null, $aliasOut);
        $object = $namespace->addClass($this->getClassName() . "Collection");
        $object->addExtend(Collection::class);
        $object->addMethod('__construct')
            ->addBody('$this->resourceClass = ' . $aliasOut. '::class;');

        $object->addMethod('first')
            ->setReturnType($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName())
            ->setReturnNullable(true)
            ->setBody('return $this->data[0];');
        return $object;

    }

    public function generateMapClass(
        ClassType $baseClass,
        PhpNamespace $namespace
    ) : ClassType {
        $namespace->addUse($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName(), null, $aliasOut);
        $object = $namespace->addClass($this->getClassName() . "Map");
        $object->addExtend(EntityMap::class);
        $object->addMethod('__construct')
            ->addBody('$this->resourceClass = ' . $aliasOut. '::class;');

        $object->addMethod('get')
            ->setReturnType($baseClass->getNamespace()->getName() . '\\' . $baseClass->getName())
            ->setReturnNullable(true)
            ->setBody('return $this->data[0];')
            ->addParameter('key')->setTypeHint('string');
        return $object;

    }

    public function addEnums(EnumGenerator $enumGenerator)
    {
        if (!is_array($this->resourceFields)) {
            var_dump($this); die();
            throw new \Exception();
        }
        foreach($this->resourceFields as $name => $def) {
            if ($def->type == 'enum') {
                $enumGenerator->addEnum($def->options, $name, $name);
            }
        }
    }

}