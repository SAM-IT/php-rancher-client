<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InstanceLink;

class InstanceLinkMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InstanceLink::class;
	}


	public function get(string $key): ?InstanceLink
	{
		return $this->data[0];
	}

}
