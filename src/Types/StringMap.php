<?php


namespace SamIT\Rancher\Types;


use Traversable;

class StringMap implements MapInterface
{
    use MapArrayAccessTrait;
    public $data = [];


    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->data);
    }

    public function set(string $key, $value)
    {
        $this->data[$key] = $value;
    }



    public function get(string $key) : string {
        return $this->data[$key];
    }

    public function count()
    {
        return count($this->data);
    }


}