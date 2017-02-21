<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Password extends Credential
{
	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/password',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/passwords',
	];


	public function getAccount(): Account
	{
	}

}
