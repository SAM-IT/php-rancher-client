<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalEvent;

class ExternalEventCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalEvent::class;
	}


	public function first(): ?ExternalEvent
	{
		return $this->data[0];
	}

}
