<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\MountEntry;

class MountEntryCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = MountEntry::class;
	}


	public function first(): ?MountEntry
	{
		return $this->data[0];
	}

}
