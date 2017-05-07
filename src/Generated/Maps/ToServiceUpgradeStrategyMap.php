<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ToServiceUpgradeStrategy;

class ToServiceUpgradeStrategyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ToServiceUpgradeStrategy::class;
	}


	public function get(string $key): ?ToServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
