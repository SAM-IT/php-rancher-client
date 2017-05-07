<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\PhysicalHost;

class PhysicalHostMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = PhysicalHost::class;
	}


	public function get(string $key): ?PhysicalHost
	{
		return $this->data[0];
	}

}
