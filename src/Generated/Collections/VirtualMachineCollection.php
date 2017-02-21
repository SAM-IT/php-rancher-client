<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\VirtualMachine;

class VirtualMachineCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = VirtualMachine::class;
	}


	public function first(): ?VirtualMachine
	{
		return $this->data[0];
	}

}
