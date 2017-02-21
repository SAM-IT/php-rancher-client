<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceRestart;

class ServiceRestartCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceRestart::class;
	}


	public function first(): ?ServiceRestart
	{
		return $this->data[0];
	}

}
