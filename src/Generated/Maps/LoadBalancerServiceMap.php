<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LoadBalancerService;

class LoadBalancerServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LoadBalancerService::class;
	}


	public function get(string $key): ?LoadBalancerService
	{
		return $this->data[0];
	}

}
