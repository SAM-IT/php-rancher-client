<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ActiveSetting;

class ActiveSettingCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ActiveSetting::class;
	}


	public function first(): ?ActiveSetting
	{
		return $this->data[0];
	}

}
