<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class RegistrationToken extends Credential
{
	/** @var string */
	public $command;

	/** @var string */
	public $image;

	/** @var string */
	public $token;

	/** @var string */
	public $registrationUrl;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registrationtoken',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registrationtokens',
	];


	public function getAccount(): Account
	{
	}

}
