<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\HaConfigInput;

class HaConfigInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = HaConfigInput::class;
	}


	public function first(): ?HaConfigInput
	{
		return $this->data[0];
	}

}
