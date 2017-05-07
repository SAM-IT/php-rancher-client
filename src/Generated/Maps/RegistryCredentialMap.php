<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RegistryCredential;

class RegistryCredentialMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RegistryCredential::class;
	}


	public function get(string $key): ?RegistryCredential
	{
		return $this->data[0];
	}

}
