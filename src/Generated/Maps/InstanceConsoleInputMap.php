<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\InstanceConsoleInput;

class InstanceConsoleInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = InstanceConsoleInput::class;
	}


	public function get(string $key): ?InstanceConsoleInput
	{
		return $this->data[0];
	}

}
