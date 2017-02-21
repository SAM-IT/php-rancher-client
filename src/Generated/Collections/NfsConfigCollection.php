<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\NfsConfig;

class NfsConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = NfsConfig::class;
	}


	public function first(): ?NfsConfig
	{
		return $this->data[0];
	}

}
