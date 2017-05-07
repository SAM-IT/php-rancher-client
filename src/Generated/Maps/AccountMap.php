<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Account;

class AccountMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Account::class;
	}


	public function get(string $key): ?Account
	{
		return $this->data[0];
	}

}
