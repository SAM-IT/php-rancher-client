<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RestartPolicy;

class RestartPolicyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RestartPolicy::class;
	}


	public function first(): ?RestartPolicy
	{
		return $this->data[0];
	}

}
