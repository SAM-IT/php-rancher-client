<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\LogConfig;

class LogConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = LogConfig::class;
	}


	public function first(): ?LogConfig
	{
		return $this->data[0];
	}

}
