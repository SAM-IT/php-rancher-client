<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\HealthcheckInstanceHostMap;

class HealthcheckInstanceHostMapCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = HealthcheckInstanceHostMap::class;
	}


	public function first(): ?HealthcheckInstanceHostMap
	{
		return $this->data[0];
	}

}
