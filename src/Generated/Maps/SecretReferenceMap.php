<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\SecretReference;

class SecretReferenceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = SecretReference::class;
	}


	public function get(string $key): ?SecretReference
	{
		return $this->data[0];
	}

}
