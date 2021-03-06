<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Container;

class ContainerCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Container::class;
	}


	public function first(): ?Container
	{
		return $this->data[0];
	}

}
