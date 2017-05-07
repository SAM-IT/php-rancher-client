<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ScalePolicy;

class ScalePolicyMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ScalePolicy::class;
	}


	public function get(string $key): ?ScalePolicy
	{
		return $this->data[0];
	}

}
