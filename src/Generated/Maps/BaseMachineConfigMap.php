<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\BaseMachineConfig;

class BaseMachineConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = BaseMachineConfig::class;
	}


	public function get(string $key): ?BaseMachineConfig
	{
		return $this->data[0];
	}

}
