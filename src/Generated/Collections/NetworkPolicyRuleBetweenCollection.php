<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\NetworkPolicyRuleBetween;

class NetworkPolicyRuleBetweenCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = NetworkPolicyRuleBetween::class;
	}


	public function first(): ?NetworkPolicyRuleBetween
	{
		return $this->data[0];
	}

}
