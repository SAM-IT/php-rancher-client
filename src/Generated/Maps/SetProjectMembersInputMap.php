<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\SetProjectMembersInput;

class SetProjectMembersInputMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = SetProjectMembersInput::class;
	}


	public function get(string $key): ?SetProjectMembersInput
	{
		return $this->data[0];
	}

}
