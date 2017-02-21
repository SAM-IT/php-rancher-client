<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Secret;

class SecretCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Secret::class;
	}


	public function first(): ?Secret
	{
		return $this->data[0];
	}

}
