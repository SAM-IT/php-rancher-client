<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalServiceEvent;

class ExternalServiceEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalServiceEvent::class;
	}


	public function get(string $key): ?ExternalServiceEvent
	{
		return $this->data[0];
	}

}
