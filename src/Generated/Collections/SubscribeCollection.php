<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Subscribe;

class SubscribeCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Subscribe::class;
	}


	public function first(): ?Subscribe
	{
		return $this->data[0];
	}

}
