<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LbTargetConfig;

class LbTargetConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LbTargetConfig::class;
	}


	public function get(string $key): ?LbTargetConfig
	{
		return $this->data[0];
	}

}
