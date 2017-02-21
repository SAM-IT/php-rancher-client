<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalHandlerProcess;

class ExternalHandlerProcessCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalHandlerProcess::class;
	}


	public function first(): ?ExternalHandlerProcess
	{
		return $this->data[0];
	}

}
