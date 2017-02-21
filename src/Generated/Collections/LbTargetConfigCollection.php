<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\LbTargetConfig;

class LbTargetConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = LbTargetConfig::class;
	}


	public function first(): ?LbTargetConfig
	{
		return $this->data[0];
	}

}
