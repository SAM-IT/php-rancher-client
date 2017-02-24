<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\ImageCollection;
use SamIT\Rancher\Generated\Collections\StorageDriveCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class StoragePool extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'driverName',
		'externalId',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'state',
		'storageDriverId',
		'uuid',
		'volumeAccessMode',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'hostIds',
		'blockDevicePath',
		'volumeCapabilities',
		'volumeIds',
	];

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
	public $driverName;

	/** @var string */
	public $externalId;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/**
	 * @var string
	 * @api-type reference[storageDriver]
	 */
	public $storageDriverId;

	/** @var string */
	public $uuid;

	/** @var string */
	public $volumeAccessMode;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var reference[host][] */
	public $hostIds = [];

	/** @var string */
	public $blockDevicePath;

	/** @var string[] */
	public $volumeCapabilities = [];

	/** @var reference[volume][] */
	public $volumeIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagepool',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagepools',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getStorageDriver(): StorageDriveCollection
	{
		return $this->client->retrieveEntities($this->links['storageDriver']);
	}


	public function getImages(): ImageCollection
	{
		return $this->client->retrieveEntities($this->links['images']);
	}


	public function getCredentials(): CredentialCollection
	{
		return $this->client->retrieveEntities($this->links['credentials']);
	}


	public function getHosts(): HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getVolumes(): VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}

}
