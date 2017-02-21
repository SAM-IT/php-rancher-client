<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ProjectTemplate;

class ProjectTemplateCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ProjectTemplate::class;
	}


	public function first(): ?ProjectTemplate
	{
		return $this->data[0];
	}

}
