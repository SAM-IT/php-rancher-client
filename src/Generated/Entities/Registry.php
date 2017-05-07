<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Registry extends StoragePool
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'blockDevicePath',
		'created',
		'description',
		'driverName',
		'externalId',
		'id',
		'kind',
		'name',
		'removed',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'volumeAccessMode',
		'volumeCapabilities',
		'serverAddress',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $serverAddress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registry',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registries',
	];


	/**
	 * @simple-getter
	 */
	public function getServerAddress(): string
	{
		return $this->serverAddress;
	}

}
