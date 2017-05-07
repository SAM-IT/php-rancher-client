<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Password;

class PasswordMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Password::class;
	}


	public function get(string $key): ?Password
	{
		return $this->data[0];
	}

}
