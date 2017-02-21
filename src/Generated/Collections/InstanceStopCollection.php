<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\InstanceStop;

class InstanceStopCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = InstanceStop::class;
	}


	public function first(): ?InstanceStop
	{
		return $this->data[0];
	}

}
