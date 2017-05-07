<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\AddOutputsInput;

class AddOutputsInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = AddOutputsInput::class;
	}


	public function get(string $key): ?AddOutputsInput
	{
		return $this->data[0];
	}

}
