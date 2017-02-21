<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Label;

class LabelCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Label::class;
	}


	public function first(): ?Label
	{
		return $this->data[0];
	}

}
