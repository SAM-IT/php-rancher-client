<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\AuditLog;

class AuditLogMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = AuditLog::class;
	}


	public function get(string $key): ?AuditLog
	{
		return $this->data[0];
	}

}
