<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\StackUpgrade;

class StackUpgradeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = StackUpgrade::class;
	}


	public function first(): ?StackUpgrade
	{
		return $this->data[0];
	}

}
