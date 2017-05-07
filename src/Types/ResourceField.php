<?php


namespace SamIT\Rancher\Types;


use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Helpers;
use Nette\PhpGenerator\PhpLiteral;
use Nette\PhpGenerator\PhpNamespace;
use Nette\Utils\Strings;

class ResourceField
{
    private const TYPE_MAP = [
        'json' => 'array',
        'map[json]' => "\\" . JsonMap::class,
        'map[string]' => "\\" . StringMap::class,
        'date' => "\\" . \DateTimeInterface::class
    ];
    public $type;
    public $description;
    /** @var  boolean */
    public $create;
    /** @var  boolean */
    public $update;
    /** @var  boolean */
    public $nullable;

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

    /**
     * Adds a property to a class type.
     * @param ClassType $type
     * @param $name
     * @param EnumGenerator|null $enumGenerator
     * @throws \Exception
     */
    public function addTo(ClassType $type, $name, EnumGenerator $enumGenerator, PhpNamespace $mapNamespace)
    {
        $property = $type->addProperty($name);
        $property->addComment($this->description);
        $property->addComment('@api-update ' . ($this->update ? 'true' : 'false'));
        $property->addComment('@api-create ' . ($this->create ? 'true' : 'false'));
        $property->addComment('@api-nullable ' . ($this->nullable ? 'true' : 'false'));

        $property->addComment("@api-type " . $this->type);
        $property->setVisibility('protected');

        $phpType = static::getPhpType($this->type, $name, $enumGenerator, $mapNamespace);
        if (strpos($phpType, '\\') !== false) {
            $type->getNamespace()->addUse($phpType);
        } elseif (ucfirst($phpType) === $phpType) {
            $phpType = $type->getNamespace()->getName() . "\\" . $phpType;
            $type->getNamespace()->addUse($phpType);
        }

        $typeHint = $this->getTypeHint($this->type, $name, $enumGenerator);

        $property->addComment("@var $typeHint");
        if (isset($enumGenerator)) {
//            $type->getNamespace()->addUse($enumGenerator->getClassName($name, $name), null, $phpType);
        }



        $getter = $type->addMethod('get' . ucfirst($name));
        $getter
            ->addComment('@simple-getter')
            ->addComment("@api-type {$this->type}")
            ->addBody('return $this->?;', [
                $name
            ])
            ->setReturnNullable($this->nullable)
            ->setReturnType($phpType);


        if ($this->update) {
            $setter = $type->addMethod('set' . ucfirst($name));
            $setter
                ->setBody('$this->? = $value;', [$property->getName()])
                ->addParameter('value')
                ->setTypeHint($phpType)
                ->setOptional($this->nullable);
        }
        if ($phpType !== $typeHint) {
            $getter->addComment("@return $typeHint");
        }
        if (preg_match('/^(array)\[(?<sub>.*)\]$/', $this->type, $matches)) {

            $property->setValue([]);
        } elseif (preg_match('/^map\[(?<sub>.*)\]$/', $this->type, $matches)) {
            $getter->setReturnType($type->getNamespace()->getName() . "\\" . $phpType);
            $property->setValue([]);
        } elseif (preg_match('/^reference\[(?<sub>.*)\]$/', $this->type, $matches)) {
            // Ids are always strings.
            $getter->setReturnType('string');
            if (substr($name, -2, 2) == 'Id') {
                $name = substr($name, 0, -2);
            }
            $type->addMethod('get' . ucfirst($name))
                ->setReturnType($phpType)
                ->setReturnNullable(true)
                ->addComment('--> getter from reference: ' . $this->type)
                ->addBody('return $this->client()->get?(?);', [
                    new PhpLiteral(ucfirst($name)),
                    new PhpLiteral("\$this->{$name}Id")
                ]);
        }

        // We now know the type.
    }

    /**
     * Get a type for usage in PHP code.
     * @param $name
     * @param ?EnumGenerator $enumGenerator
     * @return string
     * @throws \Exception
     */
    public static function getPhpType(string $type, string $name, ?EnumGenerator $enumGenerator, PhpNamespace $mapNamespace)
    {
        if ($name === 'id') {
            return 'string';
        } elseif (array_key_exists($type, self::TYPE_MAP)) {
            return self::TYPE_MAP[$type];
        } elseif (preg_match('/^array\[(?<sub>.*)\]$/', $type, $matches)) {
            return 'array';
        } elseif (preg_match('/^map\[(?<sub>.*)\]$/', $type, $matches)) {
            if (in_array($matches['sub'], ['string', 'int', 'boolean'])) {
                return 'array';
            } else {
                return "\\{$mapNamespace->getName()}\\" . static::getPhpType($matches['sub'], $name, $enumGenerator, $mapNamespace) . "Map";
            }



        } elseif (preg_match('/^reference\[(?<sub>.*)\]$/', $type, $matches)) {
            if (substr($name, -2, 2) == 'Id') {
                $name = substr($name, 0, -2);
            }
            return ucfirst($matches['sub']);
        } elseif ($type == 'enum') {
            if (!isset($enumGenerator)) {
                throw new \Exception("This schema uses enums, pass in an EnumGenerator to generate the class it describes.");
            }
            return $enumGenerator->getClassName($name, $name);
        } elseif (in_array($type, ['string', 'int', 'boolean'])) {
            return $type;
        } else {
            return ucfirst($type);
        }


    }

    /**
     * Get a TypeHint for usage in PHPDOC
     * @return string
     */
    public function getTypeHint(string $type, string $name, ?EnumGenerator $enumGenerator)
    {
        if ($name === 'id') {
            return 'string';
        } elseif (isset(self::TYPE_MAP[$type])) {
            return "\\" . self::TYPE_MAP[$type];
        } elseif (preg_match('/^array\[(?<sub>.*)\]$/', $type, $matches)) {
            return $this->getTypeHint($matches['sub'], $name, $enumGenerator) . '[]';
        } elseif (preg_match('/^map\[(?<sub>.*)\]$/', $type, $matches)) {
            if (in_array($matches['sub'], ['string', 'int', 'boolean'])) {
                return $matches['sub'] . '[]';
            }
            return ucfirst($matches['sub']) . "Map";
        } elseif (preg_match('/^reference\[(?<sub>.*)\]$/', $type, $matches)) {
            if (substr($name, -2, 2) == 'Id') {
                return "string";
            } elseif (substr($name, -3, 3) == 'Ids') {
                return "string[]";
            }
            return "weird";
        } elseif ($type == 'enum') {
            if (!isset($enumGenerator)) {
                throw new \Exception("This schema uses enums, pass in an EnumGenerator to generate the class it describes.");
            }
            $full = explode('\\', $enumGenerator->getClassName($name, $name));


            return array_pop($full);
        } elseif (in_array($type, ['string', 'int', 'boolean'])) {
            return $type;
        } elseif (array_key_exists($type, self::TYPE_MAP)) {
            return self::TYPE_MAP[$type];
        } else {
            return ucfirst($type);
        }


    }
}
