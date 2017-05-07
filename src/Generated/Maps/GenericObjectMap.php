<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\GenericObject;

class GenericObjectMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = GenericObject::class;
	}


	public function get(string $key): ?GenericObject
	{
		return $this->data[0];
	}

}
