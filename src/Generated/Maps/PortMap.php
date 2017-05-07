<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Port;

class PortMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Port::class;
	}


	public function get(string $key): ?Port
	{
		return $this->data[0];
	}

}
