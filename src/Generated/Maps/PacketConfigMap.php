<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\PacketConfig;

class PacketConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = PacketConfig::class;
	}


	public function get(string $key): ?PacketConfig
	{
		return $this->data[0];
	}

}
