<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\TargetPortRule;

class TargetPortRuleMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = TargetPortRule::class;
	}


	public function get(string $key): ?TargetPortRule
	{
		return $this->data[0];
	}

}
