<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\InstanceHealthCheck;

class InstanceHealthCheckCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = InstanceHealthCheck::class;
	}


	public function first(): ?InstanceHealthCheck
	{
		return $this->data[0];
	}

}
