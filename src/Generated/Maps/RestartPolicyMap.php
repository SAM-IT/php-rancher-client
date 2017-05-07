<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\RestartPolicy;

class RestartPolicyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = RestartPolicy::class;
	}


	public function get(string $key): ?RestartPolicy
	{
		return $this->data[0];
	}

}
