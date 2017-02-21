<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\MachineDriver;

class MachineDriverCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = MachineDriver::class;
	}


	public function first(): ?MachineDriver
	{
		return $this->data[0];
	}

}
