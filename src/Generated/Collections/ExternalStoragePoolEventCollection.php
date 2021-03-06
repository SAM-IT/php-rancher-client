<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalStoragePoolEvent;

class ExternalStoragePoolEventCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalStoragePoolEvent::class;
	}


	public function first(): ?ExternalStoragePoolEvent
	{
		return $this->data[0];
	}

}
