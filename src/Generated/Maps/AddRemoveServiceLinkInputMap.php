<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\AddRemoveServiceLinkInput;

class AddRemoveServiceLinkInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = AddRemoveServiceLinkInput::class;
	}


	public function get(string $key): ?AddRemoveServiceLinkInput
	{
		return $this->data[0];
	}

}
