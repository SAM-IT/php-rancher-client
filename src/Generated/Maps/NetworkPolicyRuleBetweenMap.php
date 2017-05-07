<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleBetween;

class NetworkPolicyRuleBetweenMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRuleBetween::class;
	}


	public function get(string $key): ?NetworkPolicyRuleBetween
	{
		return $this->data[0];
	}

}
