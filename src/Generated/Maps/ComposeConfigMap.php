<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ComposeConfig;

class ComposeConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ComposeConfig::class;
	}


	public function get(string $key): ?ComposeConfig
	{
		return $this->data[0];
	}

}
