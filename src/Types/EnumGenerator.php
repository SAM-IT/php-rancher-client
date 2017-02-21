<?php


namespace SamIT\Rancher\Types;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use MyCLabs\Enum\Enum;
use Nette\PhpGenerator\PhpNamespace;

/**
 * This class helps create enumeration types.
 * Class StringEnum
 * @package SamIT\Rancher\Types
 */
class EnumGenerator
{

    private $options = [];
    private $names = [];

    /** @var PhpNamespace */
    private $namespace;

    public function __construct()
    {
    }


    private function className($fieldName, $entityName = null)
    {
        return (isset($entityName) ? ucfirst($entityName) : '') . ucfirst($fieldName) . "Enum";
    }

    public function addEnum($options, $fieldName, $entityName)
    {
        $this->namespace = null;
        $key = md5(implode('|', $options));
        if (!isset($this->options[$key])) {
            $this->options[$key] = $options;
        }

        $this->names[$fieldName][$entityName] = $key;
    }

    public function createClasses(PhpNamespace $namespace, &$files = [])
    {
        $result = [];
        $this->namespace = $namespace;
        foreach($this->names as $fieldName => $names) {
            if (count(array_unique($names)) == 1) {
                $className = $this->className($fieldName, null);

                $files[$namespace->getName() . '\\' . $className] = $file = new PhpFile();

                // Create class for fieldName.
                $object = $file->addNamespace($namespace->getName())->addClass($className);
                $object->setAbstract(false);
                $object->addExtend(Enum::class);
                foreach ($this->options[$names[key($names)]] as $option) {
                    $object->addConstant(strtoupper(strtr($option, ['-' => '_'])), $option);
                }
                $result[$object->getNamespace()->getName() . "\\" . $object->getName()] = $object;
            } else {
                foreach($names as $entityName => $key) {
                    // Create base class.
                    $className = $this->className($fieldName, $entityName);
                    $files[$namespace->getName() . '\\' . $className] = $file = new PhpFile();
                    $object = $file->addNamespace($namespace->getName())->addClass($className);
                    $object->setAbstract(false);
                    $object->addExtend(Enum::class);
                    foreach ($this->options[$key] as $option) {
                        $object->addConstant(strtoupper(strtr($option, ['-' => '_'])), $option);
                    }
                    $result[$object->getNamespace()->getName() . "\\" . $object->getName()] = $object;
                }
            }



        }
        return $result;

    }

    /**
     * Return then class name of the enumeration type.
     * @param $options
     * @param $fieldName
     * @param $entityName
     * @return string
     */
    public function getClassName($fieldName, $entityName)
    {
        if (empty($this->namespace)) {
            throw new \Exception("Must create options first.");
        }


        if (count(array_unique($this->names[$fieldName])) == 1) {
            return "\\{$this->namespace->getName()}\\{$this->className($fieldName)}";
        } else {
            return "\\{$this->namespace->getName()}\\{$this->className($fieldName, $entityName)}";
        }
    }


}