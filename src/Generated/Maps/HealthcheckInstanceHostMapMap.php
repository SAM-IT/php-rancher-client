<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\HealthcheckInstanceHostMap;

class HealthcheckInstanceHostMapMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = HealthcheckInstanceHostMap::class;
	}


	public function get(string $key): ?HealthcheckInstanceHostMap
	{
		return $this->data[0];
	}

}
