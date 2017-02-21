<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Subnet;

class SubnetCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Subnet::class;
	}


	public function first(): ?Subnet
	{
		return $this->data[0];
	}

}
