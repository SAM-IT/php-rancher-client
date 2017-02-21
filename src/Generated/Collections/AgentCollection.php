<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Agent;

class AgentCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Agent::class;
	}


	public function first(): ?Agent
	{
		return $this->data[0];
	}

}
