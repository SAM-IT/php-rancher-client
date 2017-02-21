<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\GenericConfig;

class GenericConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = GenericConfig::class;
	}


	public function first(): ?GenericConfig
	{
		return $this->data[0];
	}

}
