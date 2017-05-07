<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\FieldDocumentation;

class FieldDocumentationMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = FieldDocumentation::class;
	}


	public function get(string $key): ?FieldDocumentation
	{
		return $this->data[0];
	}

}
