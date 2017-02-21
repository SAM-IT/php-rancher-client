<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleMember;

class NetworkPolicyRuleMemberCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRuleMember::class;
	}


	public function first(): ?NetworkPolicyRuleMember
	{
		return $this->data[0];
	}

}
