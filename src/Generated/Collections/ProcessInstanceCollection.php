<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ProcessInstance;

class ProcessInstanceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ProcessInstance::class;
	}


	public function first(): ?ProcessInstance
	{
		return $this->data[0];
	}

}
