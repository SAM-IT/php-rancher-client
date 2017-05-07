<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceRestart;

class ServiceRestartMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceRestart::class;
	}


	public function get(string $key): ?ServiceRestart
	{
		return $this->data[0];
	}

}
