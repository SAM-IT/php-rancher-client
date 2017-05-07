<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class RegistrationToken extends Credential
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'id',
		'kind',
		'name',
		'removed',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'command',
		'image',
		'token',
		'registrationUrl',
	];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $command;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $image;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $token;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $registrationUrl;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registrationtoken',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registrationtokens',
	];


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCommand(): string
	{
		return $this->command;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getImage(): string
	{
		return $this->image;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getToken(): string
	{
		return $this->token;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRegistrationUrl(): string
	{
		return $this->registrationUrl;
	}

}
