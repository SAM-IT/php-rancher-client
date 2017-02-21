<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Azureadconfig;

class AzureadconfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Azureadconfig::class;
	}


	public function first(): ?Azureadconfig
	{
		return $this->data[0];
	}

}
