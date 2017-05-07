<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Backup extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'backupTargetId',
		'created',
		'description',
		'id',
		'kind',
		'name',
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
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[account]
	 * @var string
	 */
	protected $accountId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[backupTarget]
	 * @var string
	 */
	protected $backupTargetId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $created;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $description;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $kind;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $removed;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[snapshot]
	 * @var string
	 */
	protected $snapshotId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type enum
	 * @var StateEnum
	 */
	protected $state;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uri;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[volume]
	 * @var string
	 */
	protected $volumeId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type enum
	 * @var TransitioningEnum
	 */
	protected $transitioning;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $transitioningMessage;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $transitioningProgress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/backup',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/backups',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create()
	{
		$result = new static();
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getAccountId(): string
	{
		return $this->accountId;
	}


	/**
	 * --> getter from reference: reference[account]
	 */
	public function getAccount(): ?Account
	{
		return $this->client()->getAccount($this->accountId);
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getBackupTargetId(): string
	{
		return $this->backupTargetId;
	}


	/**
	 * --> getter from reference: reference[backupTarget]
	 */
	public function getBackupTarget(): ?BackupTarget
	{
		return $this->client()->getBackupTarget($this->backupTargetId);
	}


	/**
	 * @simple-getter
	 */
	public function getCreated(): DateTimeInterface
	{
		return $this->created;
	}


	/**
	 * @simple-getter
	 */
	public function getDescription(): string
	{
		return $this->description;
	}


	public function setDescription(string $value = NULL)
	{
		$this->description = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getId(): string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 */
	public function getKind(): string
	{
		return $this->kind;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	public function setName(string $value = NULL)
	{
		$this->name = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getRemoved(): DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getSnapshotId(): string
	{
		return $this->snapshotId;
	}


	/**
	 * --> getter from reference: reference[snapshot]
	 */
	public function getSnapshot(): ?Snapshot
	{
		return $this->client()->getSnapshot($this->snapshotId);
	}


	/**
	 * @simple-getter
	 * @return StateEnum
	 */
	public function getState(): StateEnum
	{
		return $this->state;
	}


	/**
	 * @simple-getter
	 */
	public function getUri(): string
	{
		return $this->uri;
	}


	/**
	 * @simple-getter
	 */
	public function getUuid(): string
	{
		return $this->uuid;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getVolumeId(): string
	{
		return $this->volumeId;
	}


	/**
	 * --> getter from reference: reference[volume]
	 */
	public function getVolume(): ?Volume
	{
		return $this->client()->getVolume($this->volumeId);
	}


	/**
	 * @simple-getter
	 * @return TransitioningEnum
	 */
	public function getTransitioning(): TransitioningEnum
	{
		return $this->transitioning;
	}


	/**
	 * @simple-getter
	 */
	public function getTransitioningMessage(): string
	{
		return $this->transitioningMessage;
	}


	/**
	 * @simple-getter
	 */
	public function getTransitioningProgress(): int
	{
		return $this->transitioningProgress;
	}

}
