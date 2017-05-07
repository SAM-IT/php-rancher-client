<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RecreateOnQuorumStrategyConfig;

class RecreateOnQuorumStrategyConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RecreateOnQuorumStrategyConfig::class;
	}


	public function get(string $key): ?RecreateOnQuorumStrategyConfig
	{
		return $this->data[0];
	}

}
