<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Generated\Maps\ServiceMap;
use SamIT\Rancher\Types\JsonMap;

class Service extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'createIndex',
		'created',
		'description',
		'externalId',
		'healthState',
		'id',
		'kind',
		'name',
		'removed',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'state',
		'system',
		'uuid',
		'vip',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'scale',
		'currentScale',
		'scalePolicy',
		'launchConfig',
		'upgrade',
		'secondaryLaunchConfigs',
		'metadata',
		'fqdn',
		'publicEndpoints',
		'retainIp',
		'assignServiceIpAddress',
		'startOnCreate',
		'linkedServices',
		'instanceIds',
		'lbConfig',
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
	 * @api-type int
	 * @var int
	 */
	protected $createIndex;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var \\DateTimeInterface
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
	 * @var \\DateTimeInterface
	 */
	protected $removed;

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
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $scale;

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
	 * @api-type scalePolicy
	 * @var ScalePolicy
	 */
	protected $scalePolicy;

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
	 * @api-type serviceUpgrade
	 * @var ServiceUpgrade
	 */
	protected $upgrade;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[secondaryLaunchConfig]
	 * @var SecondaryLaunchConfig[]
	 */
	protected $secondaryLaunchConfigs = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $metadata = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $fqdn;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[publicEndpoint]
	 * @var PublicEndpoint[]
	 */
	protected $publicEndpoints = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $retainIp;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $assignServiceIpAddress;

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
	 * @api-nullable true
	 * @api-type map[reference[service]]
	 * @var Reference[service]Map
	 */
	protected $linkedServices = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type array[reference[instance]]
	 * @var string[][]
	 */
	protected $instanceIds = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type lbTargetConfig
	 * @var LbTargetConfig
	 */
	protected $lbConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/service',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/services',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(int $scale, array $secondaryLaunchConfigs, \boolean $assignServiceIpAddress)
	{
		$result = new static();
		$result->scale = $scale;
		$result->secondaryLaunchConfigs = $secondaryLaunchConfigs;
		$result->assignServiceIpAddress = $assignServiceIpAddress;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[account]
	 * @return string
	 */
	public function getAccountId(): ?string
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
	 * @api-type int
	 */
	public function getCreateIndex(): ?int
	{
		return $this->createIndex;
	}


	/**
	 * @simple-getter
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getCreated(): ?DateTimeInterface
	{
		return $this->created;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}


	public function setDescription(string $value = NULL)
	{
		$this->description = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getExternalId(): ?string
	{
		return $this->externalId;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getHealthState(): ?string
	{
		return $this->healthState;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getId(): ?string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getKind(): ?string
	{
		return $this->kind;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}


	public function setName(string $value = NULL)
	{
		$this->name = $value;
	}


	/**
	 * @simple-getter
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getRemoved(): ?DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSelectorContainer(): ?string
	{
		return $this->selectorContainer;
	}


	public function setSelectorContainer(string $value = NULL)
	{
		$this->selectorContainer = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSelectorLink(): ?string
	{
		return $this->selectorLink;
	}


	public function setSelectorLink(string $value = NULL)
	{
		$this->selectorLink = $value;
	}


	/**
	 * @simple-getter
	 * @api-type reference[stack]
	 * @return string
	 */
	public function getStackId(): ?string
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
	 * @api-type enum
	 * @return StateEnum
	 */
	public function getState(): StateEnum
	{
		return $this->state;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getSystem(): \boolean
	{
		return $this->system;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUuid(): ?string
	{
		return $this->uuid;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVip(): ?string
	{
		return $this->vip;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return TransitioningEnum
	 */
	public function getTransitioning(): TransitioningEnum
	{
		return $this->transitioning;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getTransitioningMessage(): ?string
	{
		return $this->transitioningMessage;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getTransitioningProgress(): ?int
	{
		return $this->transitioningProgress;
	}


	/**
	 * @simple-getter
	 * @api-type int
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
	 * @api-type int
	 */
	public function getCurrentScale(): int
	{
		return $this->currentScale;
	}


	/**
	 * @simple-getter
	 * @api-type scalePolicy
	 * @return ScalePolicy
	 */
	public function getScalePolicy(): ?ScalePolicy
	{
		return $this->scalePolicy;
	}


	public function setScalePolicy(ScalePolicy $value = NULL)
	{
		$this->scalePolicy = $value;
	}


	/**
	 * @simple-getter
	 * @api-type launchConfig
	 * @return LaunchConfig
	 */
	public function getLaunchConfig(): ?LaunchConfig
	{
		return $this->launchConfig;
	}


	/**
	 * @simple-getter
	 * @api-type serviceUpgrade
	 * @return ServiceUpgrade
	 */
	public function getUpgrade(): ?ServiceUpgrade
	{
		return $this->upgrade;
	}


	/**
	 * @simple-getter
	 * @api-type array[secondaryLaunchConfig]
	 * @return SecondaryLaunchConfig[]
	 */
	public function getSecondaryLaunchConfigs(): array
	{
		return $this->secondaryLaunchConfigs;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getMetadata(): ?\SamIT\Rancher\Types\JsonMap
	{
		return $this->metadata;
	}


	public function setMetadata(JsonMap $value = NULL)
	{
		$this->metadata = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getFqdn(): ?string
	{
		return $this->fqdn;
	}


	/**
	 * @simple-getter
	 * @api-type array[publicEndpoint]
	 * @return PublicEndpoint[]
	 */
	public function getPublicEndpoints(): ?array
	{
		return $this->publicEndpoints;
	}


	public function setPublicEndpoints(array $value = NULL)
	{
		$this->publicEndpoints = $value;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getRetainIp(): ?\boolean
	{
		return $this->retainIp;
	}


	public function setRetainIp(\boolean $value = NULL)
	{
		$this->retainIp = $value;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getAssignServiceIpAddress(): \boolean
	{
		return $this->assignServiceIpAddress;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getStartOnCreate(): ?\boolean
	{
		return $this->startOnCreate;
	}


	/**
	 * @simple-getter
	 * @api-type map[reference[service]]
	 * @return Reference[service]Map
	 */
	public function getLinkedServices(): ?\SamIT\Rancher\Generated\Maps\ServiceMap
	{
		return $this->linkedServices;
	}


	/**
	 * @simple-getter
	 * @api-type array[reference[instance]]
	 * @return string[][]
	 */
	public function getInstanceIds(): ?array
	{
		return $this->instanceIds;
	}


	/**
	 * @simple-getter
	 * @api-type lbTargetConfig
	 * @return LbTargetConfig
	 */
	public function getLbConfig(): ?LbTargetConfig
	{
		return $this->lbConfig;
	}


	public function setLbConfig(LbTargetConfig $value = NULL)
	{
		$this->lbConfig = $value;
	}

}
