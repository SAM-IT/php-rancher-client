<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\NfsConfig;

class NfsConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = NfsConfig::class;
	}


	public function get(string $key): ?NfsConfig
	{
		return $this->data[0];
	}

}
