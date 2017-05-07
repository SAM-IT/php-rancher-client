<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RegistrationToken;

class RegistrationTokenMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RegistrationToken::class;
	}


	public function get(string $key): ?RegistrationToken
	{
		return $this->data[0];
	}

}
