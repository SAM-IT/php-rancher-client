<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\GenericObject;

class GenericObjectCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = GenericObject::class;
	}


	public function first(): ?GenericObject
	{
		return $this->data[0];
	}

}
