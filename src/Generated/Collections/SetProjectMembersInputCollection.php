<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\SetProjectMembersInput;

class SetProjectMembersInputCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = SetProjectMembersInput::class;
	}


	public function first(): ?SetProjectMembersInput
	{
		return $this->data[0];
	}

}
