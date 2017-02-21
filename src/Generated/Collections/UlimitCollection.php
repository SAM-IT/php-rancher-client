<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Ulimit;

class UlimitCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Ulimit::class;
	}


	public function first(): ?Ulimit
	{
		return $this->data[0];
	}

}
