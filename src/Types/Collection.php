<?php


namespace SamIT\Rancher\Types;


use Traversable;

class Collection implements \IteratorAggregate
{
    protected $resourceClass;

    public $filters;
    public $createTypes;
    public $links;
    public $resourceType;
    public $sortLinks;
    public $pagination;
    public $sort;
    public $createDefaults;

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

    public function add(Entity $entity)
    {
        if ($entity instanceof $this->resourceClass) {
            $this->data[] = $entity;
        } else {
            throw new \Exception("Cannot add a " . get_class($entity) . " to a " . get_class($this));
        }

    }

    public static function createCollection(string $resourceType, string $namespace) : Collection
    {
        $className = $namespace . "\\" . ucfirst($resourceType) . "Collection";
        /** @var Collection $instance */
        $instance = new $className();
        return $instance;
    }
}