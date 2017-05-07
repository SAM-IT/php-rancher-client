<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InstanceStop;

class InstanceStopMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InstanceStop::class;
	}


	public function get(string $key): ?InstanceStop
	{
		return $this->data[0];
	}

}
