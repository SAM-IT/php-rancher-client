<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Backup extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'backupTargetId',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'snapshotId',
		'state',
		'uri',
		'uuid',
		'volumeId',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[backupTarget]
	 */
	public $backupTargetId;

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

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[snapshot]
	 */
	public $snapshotId;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uri;

	/** @var string */
	public $uuid;

	/**
	 * @var string
	 * @api-type reference[volume]
	 */
	public $volumeId;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/backup',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/backups',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getBackupTarget(): \SamIT\Rancher\Generated\Collections\BackupTargeCollection
	{
		return $this->client->retrieveEntities($this->links['backupTarget']);
	}


	public function getSnapshot(): \SamIT\Rancher\Generated\Collections\SnapshoCollection
	{
		return $this->client->retrieveEntities($this->links['snapshot']);
	}


	public function getVolume(): \SamIT\Rancher\Generated\Collections\VolumCollection
	{
		return $this->client->retrieveEntities($this->links['volume']);
	}

}
