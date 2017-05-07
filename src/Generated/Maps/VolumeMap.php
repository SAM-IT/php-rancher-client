<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Volume;

class VolumeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Volume::class;
	}


	public function get(string $key): ?Volume
	{
		return $this->data[0];
	}

}
