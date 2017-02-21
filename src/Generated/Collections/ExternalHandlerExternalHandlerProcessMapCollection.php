<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ExternalHandlerExternalHandlerProcessMap;

class ExternalHandlerExternalHandlerProcessMapCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ExternalHandlerExternalHandlerProcessMap::class;
	}


	public function first(): ?ExternalHandlerExternalHandlerProcessMap
	{
		return $this->data[0];
	}

}
