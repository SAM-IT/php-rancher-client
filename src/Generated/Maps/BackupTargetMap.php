<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\BackupTarget;

class BackupTargetMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = BackupTarget::class;
	}


	public function get(string $key): ?BackupTarget
	{
		return $this->data[0];
	}

}
