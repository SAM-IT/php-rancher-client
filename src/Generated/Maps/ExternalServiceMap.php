<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ExternalService;

class ExternalServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ExternalService::class;
	}


	public function get(string $key): ?ExternalService
	{
		return $this->data[0];
	}

}
