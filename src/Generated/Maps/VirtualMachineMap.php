<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\VirtualMachine;

class VirtualMachineMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = VirtualMachine::class;
	}


	public function get(string $key): ?VirtualMachine
	{
		return $this->data[0];
	}

}
