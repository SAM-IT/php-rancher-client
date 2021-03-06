<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\VolumeActivateInput;

class VolumeActivateInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = VolumeActivateInput::class;
	}


	public function first(): ?VolumeActivateInput
	{
		return $this->data[0];
	}

}
