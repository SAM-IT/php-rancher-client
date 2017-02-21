<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\InstanceConsoleInput;

class InstanceConsoleInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = InstanceConsoleInput::class;
	}


	public function first(): ?InstanceConsoleInput
	{
		return $this->data[0];
	}

}
