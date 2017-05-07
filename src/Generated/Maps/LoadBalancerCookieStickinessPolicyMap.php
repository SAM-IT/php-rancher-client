<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LoadBalancerCookieStickinessPolicy;

class LoadBalancerCookieStickinessPolicyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LoadBalancerCookieStickinessPolicy::class;
	}


	public function get(string $key): ?LoadBalancerCookieStickinessPolicy
	{
		return $this->data[0];
	}

}
