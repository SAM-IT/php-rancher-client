<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ContainerExec;

class ContainerExecCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ContainerExec::class;
	}


	public function first(): ?ContainerExec
	{
		return $this->data[0];
	}

}
