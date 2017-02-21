<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceBinding;

class ServiceBindingCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceBinding::class;
	}


	public function first(): ?ServiceBinding
	{
		return $this->data[0];
	}

}
