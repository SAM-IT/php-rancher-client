<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\LbConfig;

class LbConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = LbConfig::class;
	}


	public function first(): ?LbConfig
	{
		return $this->data[0];
	}

}
