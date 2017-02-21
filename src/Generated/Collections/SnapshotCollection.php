<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Snapshot;

class SnapshotCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Snapshot::class;
	}


	public function first(): ?Snapshot
	{
		return $this->data[0];
	}

}
