<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Instance;

class InstanceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Instance::class;
	}


	public function get(string $key): ?Instance
	{
		return $this->data[0];
	}

}
