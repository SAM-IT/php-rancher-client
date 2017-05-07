<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InstanceHealthCheck;

class InstanceHealthCheckMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InstanceHealthCheck::class;
	}


	public function get(string $key): ?InstanceHealthCheck
	{
		return $this->data[0];
	}

}
