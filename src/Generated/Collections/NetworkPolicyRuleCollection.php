<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRule;

class NetworkPolicyRuleCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRule::class;
	}


	public function first(): ?NetworkPolicyRule
	{
		return $this->data[0];
	}

}
