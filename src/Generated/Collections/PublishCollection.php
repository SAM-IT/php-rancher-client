<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Publish;

class PublishCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Publish::class;
	}


	public function first(): ?Publish
	{
		return $this->data[0];
	}

}
