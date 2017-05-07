<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalStoragePoolEvent;

class ExternalStoragePoolEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalStoragePoolEvent::class;
	}


	public function get(string $key): ?ExternalStoragePoolEvent
	{
		return $this->data[0];
	}

}
