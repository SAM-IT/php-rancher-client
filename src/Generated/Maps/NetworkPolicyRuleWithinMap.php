<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleWithin;

class NetworkPolicyRuleWithinMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRuleWithin::class;
	}


	public function get(string $key): ?NetworkPolicyRuleWithin
	{
		return $this->data[0];
	}

}
