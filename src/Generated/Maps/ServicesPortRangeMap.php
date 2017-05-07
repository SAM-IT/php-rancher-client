<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServicesPortRange;

class ServicesPortRangeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServicesPortRange::class;
	}


	public function get(string $key): ?ServicesPortRange
	{
		return $this->data[0];
	}

}
