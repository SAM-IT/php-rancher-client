<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalVolumeEvent;

class ExternalVolumeEventCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalVolumeEvent::class;
	}


	public function first(): ?ExternalVolumeEvent
	{
		return $this->data[0];
	}

}
