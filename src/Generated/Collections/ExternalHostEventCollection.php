<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalHostEvent;

class ExternalHostEventCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalHostEvent::class;
	}


	public function first(): ?ExternalHostEvent
	{
		return $this->data[0];
	}

}
