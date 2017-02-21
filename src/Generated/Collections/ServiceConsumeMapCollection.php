<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceConsumeMap;

class ServiceConsumeMapCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceConsumeMap::class;
	}


	public function first(): ?ServiceConsumeMap
	{
		return $this->data[0];
	}

}
