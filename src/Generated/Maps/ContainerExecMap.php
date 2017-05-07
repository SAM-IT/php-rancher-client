<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ContainerExec;

class ContainerExecMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ContainerExec::class;
	}


	public function get(string $key): ?ContainerExec
	{
		return $this->data[0];
	}

}
