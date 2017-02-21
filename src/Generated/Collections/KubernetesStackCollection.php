<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\KubernetesStack;

class KubernetesStackCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = KubernetesStack::class;
	}


	public function first(): ?KubernetesStack
	{
		return $this->data[0];
	}

}
