<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ResourceDefinition;

class ResourceDefinitionCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ResourceDefinition::class;
	}


	public function first(): ?ResourceDefinition
	{
		return $this->data[0];
	}

}
