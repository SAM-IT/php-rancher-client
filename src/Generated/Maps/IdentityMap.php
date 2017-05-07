<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Identity;

class IdentityMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Identity::class;
	}


	public function get(string $key): ?Identity
	{
		return $this->data[0];
	}

}
