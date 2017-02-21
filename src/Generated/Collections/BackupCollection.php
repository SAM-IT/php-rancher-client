<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Backup;

class BackupCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Backup::class;
	}


	public function first(): ?Backup
	{
		return $this->data[0];
	}

}
