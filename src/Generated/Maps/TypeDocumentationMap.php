<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\TypeDocumentation;

class TypeDocumentationMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = TypeDocumentation::class;
	}


	public function get(string $key): ?TypeDocumentation
	{
		return $this->data[0];
	}

}
