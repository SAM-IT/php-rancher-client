<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ContainerProxy;

class ContainerProxyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ContainerProxy::class;
	}


	public function get(string $key): ?ContainerProxy
	{
		return $this->data[0];
	}

}
