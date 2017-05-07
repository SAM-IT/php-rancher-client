<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\BlkioDeviceOption;

class BlkioDeviceOptionMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = BlkioDeviceOption::class;
	}


	public function get(string $key): ?BlkioDeviceOption
	{
		return $this->data[0];
	}

}
