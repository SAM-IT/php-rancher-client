<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Volume extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accessMode',
		'accountId',
		'created',
		'description',
		'externalId',
		'hostId',
		'id',
		'imageId',
		'instanceId',
		'kind',
		'name',
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

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $accessMode;

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
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[host]
	 * @var string
	 */
	protected $hostId;

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
	 * @api-type reference[image]
	 * @var string
	 */
	protected $imageId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[instance]
	 * @var string
	 */
	protected $instanceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $kind;

	/**
	 * @api-update false
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
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $sizeMb;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[stack]
	 * @var string
	 */
	protected $stackId;

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
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[storageDriver]
	 * @var string
	 */
	protected $storageDriverId;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[volumeTemplate]
	 * @var string
	 */
	protected $volumeTemplateId;

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

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $isHostPath;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $driver;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $driverOpts = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type array[mountEntry]
	 * @var MountEntry[]
	 */
	protected $mounts = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volume',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/volumes',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\StorageDriver $storageDriverId, string $driver)
	{
		$result = new static();
		$result->storageDriverId = $storageDriverId;
		$result->driver = $driver;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getAccessMode(): string
	{
		return $this->accessMode;
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
	public function getExternalId(): string
	{
		return $this->externalId;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getHostId(): string
	{
		return $this->hostId;
	}


	public function setHostId(Host $value = NULL)
	{
		$this->hostId = $value;
	}


	/**
	 * --> getter from reference: reference[host]
	 */
	public function getHost(): ?Host
	{
		return $this->client()->getHost($this->hostId);
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
	 * @return string
	 */
	public function getImageId(): string
	{
		return $this->imageId;
	}


	/**
	 * --> getter from reference: reference[image]
	 */
	public function getImage(): ?Image
	{
		return $this->client()->getImage($this->imageId);
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getInstanceId(): string
	{
		return $this->instanceId;
	}


	/**
	 * --> getter from reference: reference[instance]
	 */
	public function getInstance(): ?Instance
	{
		return $this->client()->getInstance($this->instanceId);
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


	/**
	 * @simple-getter
	 */
	public function getRemoved(): DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 */
	public function getSizeMb(): int
	{
		return $this->sizeMb;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getStackId(): string
	{
		return $this->stackId;
	}


	/**
	 * --> getter from reference: reference[stack]
	 */
	public function getStack(): ?Stack
	{
		return $this->client()->getStack($this->stackId);
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
	 * @return string
	 */
	public function getStorageDriverId(): string
	{
		return $this->storageDriverId;
	}


	/**
	 * --> getter from reference: reference[storageDriver]
	 */
	public function getStorageDriver(): ?StorageDriver
	{
		return $this->client()->getStorageDriver($this->storageDriverId);
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
	public function getVolumeTemplateId(): string
	{
		return $this->volumeTemplateId;
	}


	/**
	 * --> getter from reference: reference[volumeTemplate]
	 */
	public function getVolumeTemplate(): ?VolumeTemplate
	{
		return $this->client()->getVolumeTemplate($this->volumeTemplateId);
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


	/**
	 * @simple-getter
	 */
	public function getIsHostPath(): \boolean
	{
		return $this->isHostPath;
	}


	/**
	 * @simple-getter
	 */
	public function getDriver(): string
	{
		return $this->driver;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDriverOpts(): array
	{
		return $this->driverOpts;
	}


	public function setDriverOpts(array $value = NULL)
	{
		$this->driverOpts = $value;
	}


	/**
	 * @simple-getter
	 * @return MountEntry[]
	 */
	public function getMounts(): array
	{
		return $this->mounts;
	}

}
