<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\VolumeSnapshotInput;

class VolumeSnapshotInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = VolumeSnapshotInput::class;
	}


	public function get(string $key): ?VolumeSnapshotInput
	{
		return $this->data[0];
	}

}
