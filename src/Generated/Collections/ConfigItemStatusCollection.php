<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ConfigItemStatus;

class ConfigItemStatusCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ConfigItemStatus::class;
	}


	public function first(): ?ConfigItemStatus
	{
		return $this->data[0];
	}

}
