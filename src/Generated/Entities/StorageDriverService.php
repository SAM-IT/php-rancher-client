<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class StorageDriverService extends Service
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'assignServiceIpAddress',
		'createIndex',
		'created',
		'currentScale',
		'description',
		'externalId',
		'fqdn',
		'healthState',
		'id',
		'instanceIds',
		'kind',
		'launchConfig',
		'lbConfig',
		'linkedServices',
		'metadata',
		'name',
		'publicEndpoints',
		'removed',
		'retainIp',
		'scale',
		'scalePolicy',
		'secondaryLaunchConfigs',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'upgrade',
		'uuid',
		'vip',
		'storageDriver',
	];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type storageDriver
	 * @var StorageDriver
	 */
	protected $storageDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagedriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagedriverservices',
	];


	/**
	 * @simple-getter
	 * @return StorageDriver
	 */
	public function getStorageDriver(): StorageDriver
	{
		return $this->storageDriver;
	}


	public function setStorageDriver(StorageDriver $value)
	{
		$this->storageDriver = $value;
	}

}
