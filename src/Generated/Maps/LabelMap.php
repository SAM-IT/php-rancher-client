<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Label;

class LabelMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Label::class;
	}


	public function get(string $key): ?Label
	{
		return $this->data[0];
	}

}
