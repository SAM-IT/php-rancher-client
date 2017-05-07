<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Subscribe;

class SubscribeMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Subscribe::class;
	}


	public function get(string $key): ?Subscribe
	{
		return $this->data[0];
	}

}
