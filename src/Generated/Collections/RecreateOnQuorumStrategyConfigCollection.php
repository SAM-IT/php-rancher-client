<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RecreateOnQuorumStrategyConfig;

class RecreateOnQuorumStrategyConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RecreateOnQuorumStrategyConfig::class;
	}


	public function first(): ?RecreateOnQuorumStrategyConfig
	{
		return $this->data[0];
	}

}
