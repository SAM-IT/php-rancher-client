<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\StatsAccess;

class StatsAccessMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = StatsAccess::class;
	}


	public function get(string $key): ?StatsAccess
	{
		return $this->data[0];
	}

}
