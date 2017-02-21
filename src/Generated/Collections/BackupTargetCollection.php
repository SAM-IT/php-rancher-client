<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\BackupTarget;

class BackupTargetCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = BackupTarget::class;
	}


	public function first(): ?BackupTarget
	{
		return $this->data[0];
	}

}
