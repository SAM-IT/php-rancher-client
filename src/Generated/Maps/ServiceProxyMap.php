<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceProxy;

class ServiceProxyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceProxy::class;
	}


	public function get(string $key): ?ServiceProxy
	{
		return $this->data[0];
	}

}
