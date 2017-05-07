<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\KubernetesService;

class KubernetesServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = KubernetesService::class;
	}


	public function get(string $key): ?KubernetesService
	{
		return $this->data[0];
	}

}
