<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Subnet;

class SubnetMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Subnet::class;
	}


	public function get(string $key): ?Subnet
	{
		return $this->data[0];
	}

}
