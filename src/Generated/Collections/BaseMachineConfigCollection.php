<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\BaseMachineConfig;

class BaseMachineConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = BaseMachineConfig::class;
	}


	public function first(): ?BaseMachineConfig
	{
		return $this->data[0];
	}

}
