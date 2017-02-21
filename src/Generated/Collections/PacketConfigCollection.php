<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\PacketConfig;

class PacketConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = PacketConfig::class;
	}


	public function first(): ?PacketConfig
	{
		return $this->data[0];
	}

}
