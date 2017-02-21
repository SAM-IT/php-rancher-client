<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\PublicEndpoint;

class PublicEndpointCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = PublicEndpoint::class;
	}


	public function first(): ?PublicEndpoint
	{
		return $this->data[0];
	}

}
