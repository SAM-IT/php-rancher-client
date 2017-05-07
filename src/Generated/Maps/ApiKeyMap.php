<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ApiKey;

class ApiKeyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ApiKey::class;
	}


	public function get(string $key): ?ApiKey
	{
		return $this->data[0];
	}

}
