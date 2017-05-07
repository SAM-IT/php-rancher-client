<?php


namespace SamIT\Rancher\Types;


use Traversable;

class JsonMap implements \IteratorAggregate, \Countable
{
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

    public function set(string $key, array $value)
    {
        $this->data[$key] = $value;
    }



    public function get(string $key): array {
        return $this->data[$key];
    }

    public function count()
    {
        return count($this->data);
    }

}