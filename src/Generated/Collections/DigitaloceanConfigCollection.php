<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\DigitaloceanConfig;

class DigitaloceanConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = DigitaloceanConfig::class;
	}


	public function first(): ?DigitaloceanConfig
	{
		return $this->data[0];
	}

}
