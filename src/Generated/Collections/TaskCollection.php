<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Task;

class TaskCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Task::class;
	}


	public function first(): ?Task
	{
		return $this->data[0];
	}

}
