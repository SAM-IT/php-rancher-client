<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRule;

class NetworkPolicyRuleMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRule::class;
	}


	public function get(string $key): ?NetworkPolicyRule
	{
		return $this->data[0];
	}

}
