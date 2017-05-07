<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InServiceUpgradeStrategy;

class InServiceUpgradeStrategyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InServiceUpgradeStrategy::class;
	}


	public function get(string $key): ?InServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
