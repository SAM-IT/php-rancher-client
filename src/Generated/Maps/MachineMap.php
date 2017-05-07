<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Machine;

class MachineMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Machine::class;
	}


	public function get(string $key): ?Machine
	{
		return $this->data[0];
	}

}
