<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceExposeMap;

class ServiceExposeMapCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceExposeMap::class;
	}


	public function first(): ?ServiceExposeMap
	{
		return $this->data[0];
	}

}
