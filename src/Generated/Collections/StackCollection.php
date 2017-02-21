<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Stack;

class StackCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Stack::class;
	}


	public function first(): ?Stack
	{
		return $this->data[0];
	}

}
