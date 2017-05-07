<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ComposeService extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
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
		'linkedServices',
		'name',
		'publicEndpoints',
		'removed',
		'scale',
		'scalePolicy',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'vip',
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
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $created;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $currentScale;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $fqdn;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $healthState;

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
	 * @api-type array[reference[instance]]
	 * @var string[][]
	 */
	protected $instanceIds = [];

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
	 * @api-type launchConfig
	 * @var LaunchConfig
	 */
	protected $launchConfig;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type map[reference[service]]
	 * @var Reference[service]Map
	 */
	protected $linkedServices = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[publicEndpoint]
	 * @var PublicEndpoint[]
	 */
	protected $publicEndpoints = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $removed;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $scale;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type scalePolicy
	 * @var ScalePolicy
	 */
	protected $scalePolicy;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $selectorContainer;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $selectorLink;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $startOnCreate;

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
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $system;

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
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $vip;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/composeservices',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(int $scale)
	{
		$result = new static();
		$result->scale = $scale;
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
	 */
	public function getCreated(): DateTimeInterface
	{
		return $this->created;
	}


	/**
	 * @simple-getter
	 */
	public function getCurrentScale(): int
	{
		return $this->currentScale;
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
	 */
	public function getFqdn(): string
	{
		return $this->fqdn;
	}


	/**
	 * @simple-getter
	 */
	public function getHealthState(): string
	{
		return $this->healthState;
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
	 * @return string[][]
	 */
	public function getInstanceIds(): array
	{
		return $this->instanceIds;
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
	 * @return LaunchConfig
	 */
	public function getLaunchConfig(): LaunchConfig
	{
		return $this->launchConfig;
	}


	/**
	 * @simple-getter
	 * @return Reference[service]Map
	 */
	public function getLinkedServices(): SamIT\Rancher\Generated\Entities\Reference[service]Map
	{
		return $this->linkedServices;
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
	 * @return PublicEndpoint[]
	 */
	public function getPublicEndpoints(): array
	{
		return $this->publicEndpoints;
	}


	public function setPublicEndpoints(array $value = NULL)
	{
		$this->publicEndpoints = $value;
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
	public function getScale(): int
	{
		return $this->scale;
	}


	public function setScale(int $value)
	{
		$this->scale = $value;
	}


	/**
	 * @simple-getter
	 * @return ScalePolicy
	 */
	public function getScalePolicy(): ScalePolicy
	{
		return $this->scalePolicy;
	}


	public function setScalePolicy(ScalePolicy $value = NULL)
	{
		$this->scalePolicy = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getSelectorContainer(): string
	{
		return $this->selectorContainer;
	}


	public function setSelectorContainer(string $value = NULL)
	{
		$this->selectorContainer = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getSelectorLink(): string
	{
		return $this->selectorLink;
	}


	public function setSelectorLink(string $value = NULL)
	{
		$this->selectorLink = $value;
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
	 */
	public function getStartOnCreate(): \boolean
	{
		return $this->startOnCreate;
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
	public function getSystem(): \boolean
	{
		return $this->system;
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
	public function getUuid(): string
	{
		return $this->uuid;
	}


	/**
	 * @simple-getter
	 */
	public function getVip(): string
	{
		return $this->vip;
	}

}
