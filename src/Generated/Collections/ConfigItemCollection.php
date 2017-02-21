<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ConfigItem;

class ConfigItemCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ConfigItem::class;
	}


	public function first(): ?ConfigItem
	{
		return $this->data[0];
	}

}
