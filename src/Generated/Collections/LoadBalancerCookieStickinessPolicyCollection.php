<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\LoadBalancerCookieStickinessPolicy;

class LoadBalancerCookieStickinessPolicyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = LoadBalancerCookieStickinessPolicy::class;
	}


	public function first(): ?LoadBalancerCookieStickinessPolicy
	{
		return $this->data[0];
	}

}
