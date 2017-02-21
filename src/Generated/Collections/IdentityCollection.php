<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Identity;

class IdentityCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Identity::class;
	}


	public function first(): ?Identity
	{
		return $this->data[0];
	}

}
