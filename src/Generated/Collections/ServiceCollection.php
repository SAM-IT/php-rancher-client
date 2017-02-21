<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Service;

class ServiceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Service::class;
	}


	public function first(): ?Service
	{
		return $this->data[0];
	}

}
