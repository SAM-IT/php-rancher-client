<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\SetServiceLinksInput;

class SetServiceLinksInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = SetServiceLinksInput::class;
	}


	public function first(): ?SetServiceLinksInput
	{
		return $this->data[0];
	}

}
