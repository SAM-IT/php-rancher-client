<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalHostEvent;

class ExternalHostEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalHostEvent::class;
	}


	public function get(string $key): ?ExternalHostEvent
	{
		return $this->data[0];
	}

}
