<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ComposeProject;

class ComposeProjectMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ComposeProject::class;
	}


	public function get(string $key): ?ComposeProject
	{
		return $this->data[0];
	}

}
