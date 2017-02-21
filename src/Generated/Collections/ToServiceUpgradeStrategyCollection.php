<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ToServiceUpgradeStrategy;

class ToServiceUpgradeStrategyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ToServiceUpgradeStrategy::class;
	}


	public function first(): ?ToServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
