<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\InstanceLink;

class InstanceLinkCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = InstanceLink::class;
	}


	public function first(): ?InstanceLink
	{
		return $this->data[0];
	}

}
