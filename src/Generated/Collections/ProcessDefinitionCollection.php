<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ProcessDefinition;

class ProcessDefinitionCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ProcessDefinition::class;
	}


	public function first(): ?ProcessDefinition
	{
		return $this->data[0];
	}

}
