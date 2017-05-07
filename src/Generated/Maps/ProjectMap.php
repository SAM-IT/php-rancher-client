<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Project;

class ProjectMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Project::class;
	}


	public function get(string $key): ?Project
	{
		return $this->data[0];
	}

}
