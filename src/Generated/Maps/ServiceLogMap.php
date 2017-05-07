<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ServiceLog;

class ServiceLogMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ServiceLog::class;
	}


	public function get(string $key): ?ServiceLog
	{
		return $this->data[0];
	}

}
