<?php


namespace SamIT\Rancher\Types;

use Nette\PhpGenerator\PhpFile;
use MyCLabs\Enum\Enum;

/**
 * This class helps create enumeration types.
 * Class StringEnum
 * @package SamIT\Rancher\Types
 */
class EnumGenerator
{

    private $options = [];
    private $names = [];
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

    public function createClasses($folder, $namespace)
    {
        $this->namespace = $namespace;
        foreach($this->names as $fieldName => $names) {
            if (count(array_unique($names)) == 1) {
                // Create class for fieldName.
                $file = new PhpFile();
                $object = $file->addNamespace($namespace)->addClass($this->className($fieldName, null));
                $object->setAbstract(false);
                $object->addExtend(Enum::class);
                foreach ($this->options[$names[key($names)]] as $option) {
                    $object->addConstant(strtoupper(strtr($option, ['-' => '_'])), $option);
                }
                file_put_contents("$folder/{$object->getName()}.php", $file->__toString());
            } else {
                foreach($names as $entityName => $key) {
                    // Create base class.
                    $file = new PhpFile();
                    $object = $file->addNamespace($namespace)->addClass($this->className($fieldName, $entityName));
                    $object->setAbstract(false);
                    $object->addExtend(Enum::class);
                    foreach ($this->options[$key] as $option) {
                        $object->addConstant(strtoupper(strtr($option, ['-' => '_'])), $option);
                    }
                    file_put_contents("$folder/{$object->getName()}.php", $file->__toString());
                }
            }
        }

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
            return "\\{$this->namespace}\\{$this->className($fieldName)}";
        } else {
            return "\\{$this->namespace}\\{$this->className($fieldName, $entityName)}";
        }
    }


}