<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\IpAddress;

class IpAddressCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = IpAddress::class;
	}


	public function first(): ?IpAddress
	{
		return $this->data[0];
	}

}
