<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Host;

class HostMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Host::class;
	}


	public function get(string $key): ?Host
	{
		return $this->data[0];
	}

}
