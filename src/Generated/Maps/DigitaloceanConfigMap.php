<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\DigitaloceanConfig;

class DigitaloceanConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = DigitaloceanConfig::class;
	}


	public function get(string $key): ?DigitaloceanConfig
	{
		return $this->data[0];
	}

}
