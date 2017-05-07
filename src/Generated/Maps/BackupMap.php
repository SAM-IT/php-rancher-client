<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Backup;

class BackupMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Backup::class;
	}


	public function get(string $key): ?Backup
	{
		return $this->data[0];
	}

}
