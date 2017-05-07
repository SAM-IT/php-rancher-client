<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ComposeService;

class ComposeServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ComposeService::class;
	}


	public function get(string $key): ?ComposeService
	{
		return $this->data[0];
	}

}
