<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Credential;

class CredentialMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Credential::class;
	}


	public function get(string $key): ?Credential
	{
		return $this->data[0];
	}

}
