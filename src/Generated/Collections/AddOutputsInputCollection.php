<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\AddOutputsInput;

class AddOutputsInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = AddOutputsInput::class;
	}


	public function first(): ?AddOutputsInput
	{
		return $this->data[0];
	}

}
