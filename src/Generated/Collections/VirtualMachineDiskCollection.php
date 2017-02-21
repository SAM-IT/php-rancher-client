<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\VirtualMachineDisk;

class VirtualMachineDiskCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = VirtualMachineDisk::class;
	}


	public function first(): ?VirtualMachineDisk
	{
		return $this->data[0];
	}

}
