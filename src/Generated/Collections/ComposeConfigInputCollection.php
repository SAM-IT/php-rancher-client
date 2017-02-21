<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ComposeConfigInput;

class ComposeConfigInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ComposeConfigInput::class;
	}


	public function first(): ?ComposeConfigInput
	{
		return $this->data[0];
	}

}
