<?php


namespace SamIT\Rancher\Types;


interface MapInterface extends \Traversable, \Countable, \ArrayAccess
{
    public function get(string $key);
    public function set(string $key, $value);
}