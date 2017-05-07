<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceLink;

class ServiceLinkMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceLink::class;
	}


	public function get(string $key): ?ServiceLink
	{
		return $this->data[0];
	}

}
