<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Network;

class NetworkMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Network::class;
	}


	public function get(string $key): ?Network
	{
		return $this->data[0];
	}

}
