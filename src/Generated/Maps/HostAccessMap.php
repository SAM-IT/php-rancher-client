<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\HostAccess;

class HostAccessMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = HostAccess::class;
	}


	public function get(string $key): ?HostAccess
	{
		return $this->data[0];
	}

}
