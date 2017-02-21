<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Binding;

class BindingCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Binding::class;
	}


	public function first(): ?Binding
	{
		return $this->data[0];
	}

}
