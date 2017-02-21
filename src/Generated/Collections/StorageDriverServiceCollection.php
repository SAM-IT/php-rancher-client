<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\StorageDriverService;

class StorageDriverServiceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = StorageDriverService::class;
	}


	public function first(): ?StorageDriverService
	{
		return $this->data[0];
	}

}
