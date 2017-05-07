<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ActiveSetting;

class ActiveSettingMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ActiveSetting::class;
	}


	public function get(string $key): ?ActiveSetting
	{
		return $this->data[0];
	}

}
