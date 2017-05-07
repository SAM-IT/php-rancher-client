<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\KubernetesStack;

class KubernetesStackMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = KubernetesStack::class;
	}


	public function get(string $key): ?KubernetesStack
	{
		return $this->data[0];
	}

}
