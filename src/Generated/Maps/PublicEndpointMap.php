<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\PublicEndpoint;

class PublicEndpointMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = PublicEndpoint::class;
	}


	public function get(string $key): ?PublicEndpoint
	{
		return $this->data[0];
	}

}
