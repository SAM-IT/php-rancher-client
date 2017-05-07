<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalEvent;

class ExternalEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalEvent::class;
	}


	public function get(string $key): ?ExternalEvent
	{
		return $this->data[0];
	}

}
