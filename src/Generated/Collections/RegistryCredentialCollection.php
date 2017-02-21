<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RegistryCredential;

class RegistryCredentialCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RegistryCredential::class;
	}


	public function first(): ?RegistryCredential
	{
		return $this->data[0];
	}

}
