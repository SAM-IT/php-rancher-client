<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\HostAccess;

class HostAccessCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = HostAccess::class;
	}


	public function first(): ?HostAccess
	{
		return $this->data[0];
	}

}
