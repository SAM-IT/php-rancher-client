<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ContainerEvent;

class ContainerEventMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ContainerEvent::class;
	}


	public function get(string $key): ?ContainerEvent
	{
		return $this->data[0];
	}

}
