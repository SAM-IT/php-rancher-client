<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServicesPortRange;

class ServicesPortRangeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServicesPortRange::class;
	}


	public function first(): ?ServicesPortRange
	{
		return $this->data[0];
	}

}
