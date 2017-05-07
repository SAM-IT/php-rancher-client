<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceEvent;

class ServiceEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceEvent::class;
	}


	public function get(string $key): ?ServiceEvent
	{
		return $this->data[0];
	}

}
