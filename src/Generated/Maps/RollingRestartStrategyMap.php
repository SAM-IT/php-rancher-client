<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RollingRestartStrategy;

class RollingRestartStrategyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RollingRestartStrategy::class;
	}


	public function get(string $key): ?RollingRestartStrategy
	{
		return $this->data[0];
	}

}
