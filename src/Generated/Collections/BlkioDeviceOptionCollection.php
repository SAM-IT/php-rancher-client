<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\BlkioDeviceOption;

class BlkioDeviceOptionCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = BlkioDeviceOption::class;
	}


	public function first(): ?BlkioDeviceOption
	{
		return $this->data[0];
	}

}
