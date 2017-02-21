<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalServiceEvent;

class ExternalServiceEventCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalServiceEvent::class;
	}


	public function first(): ?ExternalServiceEvent
	{
		return $this->data[0];
	}

}
