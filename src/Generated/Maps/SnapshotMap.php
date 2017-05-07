<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Snapshot;

class SnapshotMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Snapshot::class;
	}


	public function get(string $key): ?Snapshot
	{
		return $this->data[0];
	}

}
