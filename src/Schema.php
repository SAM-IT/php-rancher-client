<?php


namespace SamIT\Rancher;


use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use SamIT\Rancher\Types\Collection;
use SamIT\Rancher\Types\Entity;
use SamIT\Rancher\Types\EnumGenerator;
use SamIT\Rancher\Types\ResourceField;

class Schema extends Entity
{


    public $id;
    public $type;
    public $links;


    /** @var ResourceField[] */
    public $resourceFields = [];

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

        $this->addFields($object);

        $generateClass = $object->addMethod('generateClass')
            ->setBody('return parent::generateClass($namespace, $enumGenerator, $directory);')
            ->setReturnType(ClassType::class);
        $generateClass->addParameter('namespace')
            ->setTypeHint('string')
            ->setOptional(false);
        $generateClass->addParameter('enumGenerator')
            ->setTypeHint(EnumGenerator::class)
            ->setOptional(false);
        $generateClass->addParameter('directory')
            ->setTypeHint('string')
            ->setOptional(false);


        return $file;


    }

    protected function addLinks(ClassType $object)
    {
        $object->addProperty('entityLinks')
            ->setStatic(true)
            ->setValue($this->links)
            ->addComment('@var string[]');

    }
    protected function addFields(ClassType $object, EnumGenerator $enumGenerator = null, $parent = null)
    {
        /**
         * @var string $name
         * @var  ResourceField $def
         */
        foreach($this->resourceFields as $name => $def) {
            if (isset($parent) && property_exists($parent, $name)) {
                continue;
            }
            $def->addTo($object, $name, $enumGenerator);

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
    public function generateClass(
        string $namespace,
        EnumGenerator $enumGenerator,
        string $directory
    ) : ClassType {
        $file = new \Nette\PhpGenerator\PhpFile();
        $object = $file->addClass("{$namespace}\\{$this->getClassName()}")
            ->addExtend(Entity::class);

        $this->addFields($object, $enumGenerator);
        $this->addLinks($object);
        file_put_contents("$directory/{$this->getClassName()}.php", $file);
        return $object;
    }


    public function generateCollectionClass(
        string $baseClass,
        string $namespace,
        EnumGenerator $enumGenerator,
        string $directory
    ) : ClassType {
        $file = new \Nette\PhpGenerator\PhpFile();
        $object = $file->addClass("{$namespace}\\{$this->getClassName()}Collection");
        $object->addExtend(Collection::class);
        $object->addMethod('__construct')
            ->addBody('$this->resourceClass = \\' . $baseClass . '::class;');
        file_put_contents("$directory/{$this->getClassName()}Collection.php", $file);
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