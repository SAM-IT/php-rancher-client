<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Stack;

class StackMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Stack::class;
	}


	public function get(string $key): ?Stack
	{
		return $this->data[0];
	}

}
