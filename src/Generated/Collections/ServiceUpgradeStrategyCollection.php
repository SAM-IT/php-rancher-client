<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceUpgradeStrategy;

class ServiceUpgradeStrategyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceUpgradeStrategy::class;
	}


	public function first(): ?ServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
