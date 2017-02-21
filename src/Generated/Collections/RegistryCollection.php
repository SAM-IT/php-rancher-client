<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Registry;

class RegistryCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Registry::class;
	}


	public function first(): ?Registry
	{
		return $this->data[0];
	}

}
