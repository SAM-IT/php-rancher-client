<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ContainerLogs;

class ContainerLogsMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ContainerLogs::class;
	}


	public function get(string $key): ?ContainerLogs
	{
		return $this->data[0];
	}

}
