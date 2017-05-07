<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceExposeMap;

class ServiceExposeMapMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceExposeMap::class;
	}


	public function get(string $key): ?ServiceExposeMap
	{
		return $this->data[0];
	}

}
