<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\StorageDriver;

class StorageDriverMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = StorageDriver::class;
	}


	public function get(string $key): ?StorageDriver
	{
		return $this->data[0];
	}

}
