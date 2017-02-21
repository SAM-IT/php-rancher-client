<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\TaskInstance;

class TaskInstanceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = TaskInstance::class;
	}


	public function first(): ?TaskInstance
	{
		return $this->data[0];
	}

}
