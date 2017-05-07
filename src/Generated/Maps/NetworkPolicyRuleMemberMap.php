<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleMember;

class NetworkPolicyRuleMemberMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRuleMember::class;
	}


	public function get(string $key): ?NetworkPolicyRuleMember
	{
		return $this->data[0];
	}

}
