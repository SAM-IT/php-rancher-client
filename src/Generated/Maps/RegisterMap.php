<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Register;

class RegisterMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Register::class;
	}


	public function get(string $key): ?Register
	{
		return $this->data[0];
	}

}
