<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Service;

class ServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Service::class;
	}


	public function get(string $key): ?Service
	{
		return $this->data[0];
	}

}
