<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Secret;

class SecretMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Secret::class;
	}


	public function get(string $key): ?Secret
	{
		return $this->data[0];
	}

}
