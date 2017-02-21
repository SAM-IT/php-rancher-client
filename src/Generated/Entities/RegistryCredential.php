<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class RegistryCredential extends Credential
{
	/**
	 * @var string
	 * @api-type reference[registry]
	 */
	public $registryId;

	/** @var string */
	public $email;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registrycredential',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registrycredentials',
	];


	public function getAccount(): Account
	{
	}


	public function getRegistry(): Registry
	{
	}

}
