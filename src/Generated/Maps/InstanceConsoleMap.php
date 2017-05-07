<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InstanceConsole;

class InstanceConsoleMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InstanceConsole::class;
	}


	public function get(string $key): ?InstanceConsole
	{
		return $this->data[0];
	}

}
