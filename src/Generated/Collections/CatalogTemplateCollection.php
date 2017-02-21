<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\CatalogTemplate;

class CatalogTemplateCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = CatalogTemplate::class;
	}


	public function first(): ?CatalogTemplate
	{
		return $this->data[0];
	}

}
