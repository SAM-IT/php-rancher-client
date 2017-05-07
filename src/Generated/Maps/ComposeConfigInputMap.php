<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ComposeConfigInput;

class ComposeConfigInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ComposeConfigInput::class;
	}


	public function get(string $key): ?ComposeConfigInput
	{
		return $this->data[0];
	}

}
