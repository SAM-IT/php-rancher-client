<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\VolumeActivateInput;

class VolumeActivateInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = VolumeActivateInput::class;
	}


	public function get(string $key): ?VolumeActivateInput
	{
		return $this->data[0];
	}

}
