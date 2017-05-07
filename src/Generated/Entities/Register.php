<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Register extends GenericObject
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'id',
		'key',
		'kind',
		'name',
		'removed',
		'resourceData',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'accessKey',
		'secretKey',
	];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $accessKey;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $secretKey;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/register',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/register',
	];


	/**
	 * @simple-getter
	 */
	public function getAccessKey(): string
	{
		return $this->accessKey;
	}


	/**
	 * @simple-getter
	 */
	public function getSecretKey(): string
	{
		return $this->secretKey;
	}

}
