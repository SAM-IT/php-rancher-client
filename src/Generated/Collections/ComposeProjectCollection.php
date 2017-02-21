<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ComposeProject;

class ComposeProjectCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ComposeProject::class;
	}


	public function first(): ?ComposeProject
	{
		return $this->data[0];
	}

}
