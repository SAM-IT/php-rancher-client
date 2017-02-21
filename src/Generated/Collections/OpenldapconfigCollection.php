<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Openldapconfig;

class OpenldapconfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Openldapconfig::class;
	}


	public function first(): ?Openldapconfig
	{
		return $this->data[0];
	}

}
