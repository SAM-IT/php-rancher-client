<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ScheduledUpgrade;

class ScheduledUpgradeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ScheduledUpgrade::class;
	}


	public function first(): ?ScheduledUpgrade
	{
		return $this->data[0];
	}

}
