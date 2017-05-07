<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Registry;

class RegistryMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Registry::class;
	}


	public function get(string $key): ?Registry
	{
		return $this->data[0];
	}

}
