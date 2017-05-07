<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceConsumeMap;

class ServiceConsumeMapMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceConsumeMap::class;
	}


	public function get(string $key): ?ServiceConsumeMap
	{
		return $this->data[0];
	}

}
