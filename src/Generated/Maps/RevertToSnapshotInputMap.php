<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RevertToSnapshotInput;

class RevertToSnapshotInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RevertToSnapshotInput::class;
	}


	public function get(string $key): ?RevertToSnapshotInput
	{
		return $this->data[0];
	}

}
