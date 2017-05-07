<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LogConfig;

class LogConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LogConfig::class;
	}


	public function get(string $key): ?LogConfig
	{
		return $this->data[0];
	}

}
