<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\StoragePool;

class StoragePoolMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = StoragePool::class;
	}


	public function get(string $key): ?StoragePool
	{
		return $this->data[0];
	}

}
