<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\DockerBuild;

class DockerBuildMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = DockerBuild::class;
	}


	public function get(string $key): ?DockerBuild
	{
		return $this->data[0];
	}

}
