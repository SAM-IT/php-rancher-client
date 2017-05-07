<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LbConfig;

class LbConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LbConfig::class;
	}


	public function get(string $key): ?LbConfig
	{
		return $this->data[0];
	}

}
