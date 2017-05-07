<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\MountEntry;

class MountEntryMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = MountEntry::class;
	}


	public function get(string $key): ?MountEntry
	{
		return $this->data[0];
	}

}
