<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\RegistrationToken;

class RegistrationTokenCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = RegistrationToken::class;
	}


	public function first(): ?RegistrationToken
	{
		return $this->data[0];
	}

}
