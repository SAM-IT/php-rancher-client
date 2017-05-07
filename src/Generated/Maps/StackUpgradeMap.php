<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\StackUpgrade;

class StackUpgradeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = StackUpgrade::class;
	}


	public function get(string $key): ?StackUpgrade
	{
		return $this->data[0];
	}

}
