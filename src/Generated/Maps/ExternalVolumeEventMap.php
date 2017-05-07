<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalVolumeEvent;

class ExternalVolumeEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalVolumeEvent::class;
	}


	public function get(string $key): ?ExternalVolumeEvent
	{
		return $this->data[0];
	}

}
