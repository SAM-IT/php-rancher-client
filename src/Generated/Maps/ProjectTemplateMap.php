<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ProjectTemplate;

class ProjectTemplateMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ProjectTemplate::class;
	}


	public function get(string $key): ?ProjectTemplate
	{
		return $this->data[0];
	}

}
