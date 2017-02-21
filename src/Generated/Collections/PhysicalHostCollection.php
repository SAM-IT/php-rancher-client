<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\PhysicalHost;

class PhysicalHostCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = PhysicalHost::class;
	}


	public function first(): ?PhysicalHost
	{
		return $this->data[0];
	}

}
