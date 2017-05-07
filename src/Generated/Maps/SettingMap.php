<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Setting;

class SettingMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Setting::class;
	}


	public function get(string $key): ?Setting
	{
		return $this->data[0];
	}

}
