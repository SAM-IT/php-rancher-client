<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceUpgradeStrategy;

class ServiceUpgradeStrategyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceUpgradeStrategy::class;
	}


	public function get(string $key): ?ServiceUpgradeStrategy
	{
		return $this->data[0];
	}

}
