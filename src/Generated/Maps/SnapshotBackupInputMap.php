<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\SnapshotBackupInput;

class SnapshotBackupInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = SnapshotBackupInput::class;
	}


	public function get(string $key): ?SnapshotBackupInput
	{
		return $this->data[0];
	}

}
