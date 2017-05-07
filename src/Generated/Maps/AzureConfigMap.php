<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\AzureConfig;

class AzureConfigMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = AzureConfig::class;
	}


	public function get(string $key): ?AzureConfig
	{
		return $this->data[0];
	}

}
