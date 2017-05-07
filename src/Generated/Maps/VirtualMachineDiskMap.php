<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\VirtualMachineDisk;

class VirtualMachineDiskMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = VirtualMachineDisk::class;
	}


	public function get(string $key): ?VirtualMachineDisk
	{
		return $this->data[0];
	}

}
