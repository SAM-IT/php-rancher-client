<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Volume;

class VolumeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Volume::class;
	}


	public function first(): ?Volume
	{
		return $this->data[0];
	}

}
