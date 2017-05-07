<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Amazonec2Config;

class Amazonec2ConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Amazonec2Config::class;
	}


	public function get(string $key): ?Amazonec2Config
	{
		return $this->data[0];
	}

}
