<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\IpAddress;

class IpAddressMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = IpAddress::class;
	}


	public function get(string $key): ?IpAddress
	{
		return $this->data[0];
	}

}
