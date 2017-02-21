<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\InServiceUpgradeStrategy;

class InServiceUpgradeStrategyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = InServiceUpgradeStrategy::class;
	}


	public function first(): ?InServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
