<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceUpgrade;

class ServiceUpgradeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceUpgrade::class;
	}


	public function get(string $key): ?ServiceUpgrade
	{
		return $this->data[0];
	}

}
