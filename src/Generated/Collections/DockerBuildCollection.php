<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\DockerBuild;

class DockerBuildCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = DockerBuild::class;
	}


	public function first(): ?DockerBuild
	{
		return $this->data[0];
	}

}
