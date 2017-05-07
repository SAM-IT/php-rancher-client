<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\GenericConfig;

class GenericConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = GenericConfig::class;
	}


	public function get(string $key): ?GenericConfig
	{
		return $this->data[0];
	}

}
