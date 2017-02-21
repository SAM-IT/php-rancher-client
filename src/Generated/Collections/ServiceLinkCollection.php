<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceLink;

class ServiceLinkCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceLink::class;
	}


	public function first(): ?ServiceLink
	{
		return $this->data[0];
	}

}
