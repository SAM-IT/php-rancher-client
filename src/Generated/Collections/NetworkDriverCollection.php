<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\NetworkDriver;

class NetworkDriverCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = NetworkDriver::class;
	}


	public function first(): ?NetworkDriver
	{
		return $this->data[0];
	}

}
