<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RestoreFromBackupInput;

class RestoreFromBackupInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RestoreFromBackupInput::class;
	}


	public function first(): ?RestoreFromBackupInput
	{
		return $this->data[0];
	}

}
