<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\MachineDriver;

class MachineDriverMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = MachineDriver::class;
	}


	public function get(string $key): ?MachineDriver
	{
		return $this->data[0];
	}

}
