<?php
namespace SamIT\Rancher\Generated\Entities;

class RegistryCredential extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var string */
	public $publicValue;

	/**
	 * @var string
	 * @api-type reference[registry]
	 */
	public $registryId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var password */
	public $secretValue;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

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
