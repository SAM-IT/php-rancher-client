<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\SecondaryLaunchConfig;

class SecondaryLaunchConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = SecondaryLaunchConfig::class;
	}


	public function get(string $key): ?SecondaryLaunchConfig
	{
		return $this->data[0];
	}

}
