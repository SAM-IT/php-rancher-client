<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NetworkDriverService;

class NetworkDriverServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NetworkDriverService::class;
	}


	public function get(string $key): ?NetworkDriverService
	{
		return $this->data[0];
	}

}
