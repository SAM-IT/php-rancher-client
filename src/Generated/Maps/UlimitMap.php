<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Ulimit;

class UlimitMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Ulimit::class;
	}


	public function get(string $key): ?Ulimit
	{
		return $this->data[0];
	}

}
