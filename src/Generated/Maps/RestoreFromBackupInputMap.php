<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RestoreFromBackupInput;

class RestoreFromBackupInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RestoreFromBackupInput::class;
	}


	public function get(string $key): ?RestoreFromBackupInput
	{
		return $this->data[0];
	}

}
