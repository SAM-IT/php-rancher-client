<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkDriver;

class NetworkDriverMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkDriver::class;
	}


	public function get(string $key): ?NetworkDriver
	{
		return $this->data[0];
	}

}
