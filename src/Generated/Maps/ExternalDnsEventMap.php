<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalDnsEvent;

class ExternalDnsEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalDnsEvent::class;
	}


	public function get(string $key): ?ExternalDnsEvent
	{
		return $this->data[0];
	}

}
