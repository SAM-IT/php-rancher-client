<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ComposeConfig;

class ComposeConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ComposeConfig::class;
	}


	public function first(): ?ComposeConfig
	{
		return $this->data[0];
	}

}
