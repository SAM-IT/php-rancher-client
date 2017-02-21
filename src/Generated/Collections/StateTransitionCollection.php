<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\StateTransition;

class StateTransitionCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = StateTransition::class;
	}


	public function first(): ?StateTransition
	{
		return $this->data[0];
	}

}
