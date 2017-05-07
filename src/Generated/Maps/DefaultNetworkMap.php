<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\DefaultNetwork;

class DefaultNetworkMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = DefaultNetwork::class;
	}


	public function get(string $key): ?DefaultNetwork
	{
		return $this->data[0];
	}

}
