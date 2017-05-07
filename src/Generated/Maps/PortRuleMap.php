<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\PortRule;

class PortRuleMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = PortRule::class;
	}


	public function get(string $key): ?PortRule
	{
		return $this->data[0];
	}

}
