<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Schema;

class SchemaMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Schema::class;
	}


	public function get(string $key): ?Schema
	{
		return $this->data[0];
	}

}
