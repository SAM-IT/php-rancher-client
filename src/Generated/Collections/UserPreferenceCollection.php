<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\UserPreference;

class UserPreferenceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = UserPreference::class;
	}


	public function first(): ?UserPreference
	{
		return $this->data[0];
	}

}
