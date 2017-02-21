<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalHandlerProcessConfig;

class ExternalHandlerProcessConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalHandlerProcessConfig::class;
	}


	public function first(): ?ExternalHandlerProcessConfig
	{
		return $this->data[0];
	}

}
