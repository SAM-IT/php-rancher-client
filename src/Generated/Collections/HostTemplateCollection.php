<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\HostTemplate;

class HostTemplateCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = HostTemplate::class;
	}


	public function first(): ?HostTemplate
	{
		return $this->data[0];
	}

}
