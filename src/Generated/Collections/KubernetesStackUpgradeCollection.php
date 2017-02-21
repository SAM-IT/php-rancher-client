<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\KubernetesStackUpgrade;

class KubernetesStackUpgradeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = KubernetesStackUpgrade::class;
	}


	public function first(): ?KubernetesStackUpgrade
	{
		return $this->data[0];
	}

}
