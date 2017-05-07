<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Container;

class ContainerMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Container::class;
	}


	public function get(string $key): ?Container
	{
		return $this->data[0];
	}

}
