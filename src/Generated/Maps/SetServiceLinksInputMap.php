<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\SetServiceLinksInput;

class SetServiceLinksInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = SetServiceLinksInput::class;
	}


	public function get(string $key): ?SetServiceLinksInput
	{
		return $this->data[0];
	}

}
