<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\LaunchConfig;

class LaunchConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = LaunchConfig::class;
	}


	public function get(string $key): ?LaunchConfig
	{
		return $this->data[0];
	}

}
