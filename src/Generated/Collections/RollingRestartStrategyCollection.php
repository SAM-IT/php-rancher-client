<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RollingRestartStrategy;

class RollingRestartStrategyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RollingRestartStrategy::class;
	}


	public function first(): ?RollingRestartStrategy
	{
		return $this->data[0];
	}

}
