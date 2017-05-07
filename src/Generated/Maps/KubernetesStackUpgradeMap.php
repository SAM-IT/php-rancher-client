<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\KubernetesStackUpgrade;

class KubernetesStackUpgradeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = KubernetesStackUpgrade::class;
	}


	public function get(string $key): ?KubernetesStackUpgrade
	{
		return $this->data[0];
	}

}
