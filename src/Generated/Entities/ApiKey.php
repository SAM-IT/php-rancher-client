<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ApiKey extends Credential
{
	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/apikey',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/apikeys',
	];


	public function getAccount(): Account
	{
	}

}
