<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Mount;

class MountCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Mount::class;
	}


	public function first(): ?Mount
	{
		return $this->data[0];
	}

}
