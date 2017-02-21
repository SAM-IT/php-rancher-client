<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\AzureConfig;

class AzureConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = AzureConfig::class;
	}


	public function first(): ?AzureConfig
	{
		return $this->data[0];
	}

}
