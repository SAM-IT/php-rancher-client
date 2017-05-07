<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ScheduledUpgrade;

class ScheduledUpgradeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ScheduledUpgrade::class;
	}


	public function get(string $key): ?ScheduledUpgrade
	{
		return $this->data[0];
	}

}
