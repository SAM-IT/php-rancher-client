<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ContainerProxy;

class ContainerProxyCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ContainerProxy::class;
	}


	public function first(): ?ContainerProxy
	{
		return $this->data[0];
	}

}
