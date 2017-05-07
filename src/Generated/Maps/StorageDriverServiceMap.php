<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\StorageDriverService;

class StorageDriverServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = StorageDriverService::class;
	}


	public function get(string $key): ?StorageDriverService
	{
		return $this->data[0];
	}

}
