<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ProcessPool;

class ProcessPoolCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ProcessPool::class;
	}


	public function first(): ?ProcessPool
	{
		return $this->data[0];
	}

}
