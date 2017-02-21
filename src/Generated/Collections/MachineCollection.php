<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Machine;

class MachineCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Machine::class;
	}


	public function first(): ?Machine
	{
		return $this->data[0];
	}

}
