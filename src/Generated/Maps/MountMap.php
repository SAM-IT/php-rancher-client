<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Mount;

class MountMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Mount::class;
	}


	public function get(string $key): ?Mount
	{
		return $this->data[0];
	}

}
