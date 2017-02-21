<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Volume extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accessMode',
		'accountId',
		'created',
		'data',
		'description',
		'externalId',
		'hostId',
		'id',
		'imageId',
		'instanceId',
		'kind',
		'name',
		'removeTime',
		'removed',
		'sizeMb',
		'stackId',
		'state',
		'storageDriverId',
		'uri',
		'uuid',
		'volumeTemplateId',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'isHostPath',
		'driver',
		'driverOpts',
		'mounts',
	];

	/** @var string */
	public $accessMode;

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

	/** @var string */
	public $externalId;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var int */
	public $id;

	/**
	 * @var string
	 * @api-type reference[image]
	 */
	public $imageId;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var int */
	public $sizeMb;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var StateEnum */
	public $state;

	/**
	 * @var string
	 * @api-type reference[storageDriver]
	 */
	public $storageDriverId;

	/** @var string */
	public $uri;

	/** @var string */
	public $uuid;

	/**
	 * @var string
	 * @api-type reference[volumeTemplate]
	 */
	public $volumeTemplateId;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var boolean */
	public $isHostPath;

	/** @var string */
	public $driver;

	/** @var StringMap */
	public $driverOpts = [];

	/** @var mountEntry[] */
	public $mounts = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volume',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/volumes',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getHost(): \SamIT\Rancher\Generated\Collections\HosCollection
	{
		return $this->client->retrieveEntities($this->links['host']);
	}


	public function getImage(): \SamIT\Rancher\Generated\Collections\ImagCollection
	{
		return $this->client->retrieveEntities($this->links['image']);
	}


	public function getInstance(): \SamIT\Rancher\Generated\Collections\InstancCollection
	{
		return $this->client->retrieveEntities($this->links['instance']);
	}


	public function getStack(): \SamIT\Rancher\Generated\Collections\StacCollection
	{
		return $this->client->retrieveEntities($this->links['stack']);
	}


	public function getStorageDriver(): \SamIT\Rancher\Generated\Collections\StorageDriveCollection
	{
		return $this->client->retrieveEntities($this->links['storageDriver']);
	}


	public function getVolumeTemplate(): \SamIT\Rancher\Generated\Collections\VolumeTemplatCollection
	{
		return $this->client->retrieveEntities($this->links['volumeTemplate']);
	}


	public function getSnapshots(): \SamIT\Rancher\Generated\Collections\SnapshotCollection
	{
		return $this->client->retrieveEntities($this->links['snapshots']);
	}


	public function getStoragePools(): \SamIT\Rancher\Generated\Collections\StoragePoolCollection
	{
		return $this->client->retrieveEntities($this->links['storagePools']);
	}


	public function getMounts(): \SamIT\Rancher\Generated\Collections\MountCollection
	{
		return $this->client->retrieveEntities($this->links['mounts']);
	}


	public function getBackups(): \SamIT\Rancher\Generated\Collections\BackupCollection
	{
		return $this->client->retrieveEntities($this->links['backups']);
	}

}
