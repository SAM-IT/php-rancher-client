<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\CatalogTemplate;

class CatalogTemplateMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = CatalogTemplate::class;
	}


	public function get(string $key): ?CatalogTemplate
	{
		return $this->data[0];
	}

}
