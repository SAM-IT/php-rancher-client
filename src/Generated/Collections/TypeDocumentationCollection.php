<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\TypeDocumentation;

class TypeDocumentationCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = TypeDocumentation::class;
	}


	public function first(): ?TypeDocumentation
	{
		return $this->data[0];
	}

}
