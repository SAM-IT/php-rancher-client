<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Project;

class ProjectCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Project::class;
	}


	public function first(): ?Project
	{
		return $this->data[0];
	}

}
