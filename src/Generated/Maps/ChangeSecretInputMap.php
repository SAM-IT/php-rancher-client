<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ChangeSecretInput;

class ChangeSecretInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ChangeSecretInput::class;
	}


	public function get(string $key): ?ChangeSecretInput
	{
		return $this->data[0];
	}

}
