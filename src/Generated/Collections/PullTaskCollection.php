<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\PullTask;

class PullTaskCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = PullTask::class;
	}


	public function first(): ?PullTask
	{
		return $this->data[0];
	}

}
