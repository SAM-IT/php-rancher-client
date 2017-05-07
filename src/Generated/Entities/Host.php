<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Host extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'agentState',
		'computeTotal',
		'created',
		'description',
		'hostTemplateId',
		'id',
		'kind',
		'localStorageMb',
		'memory',
		'milliCpu',
		'name',
		'physicalHostId',
		'removed',
		'stackId',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'info',
		'hostname',
		'agentIpAddress',
		'instanceIds',
		'labels',
		'publicEndpoints',
		'amazonec2Config',
		'authCertificateAuthority',
		'authKey',
		'azureConfig',
		'digitaloceanConfig',
		'dockerVersion',
		'driver',
		'engineEnv',
		'engineInsecureRegistry',
		'engineInstallUrl',
		'engineLabel',
		'engineOpt',
		'engineRegistryMirror',
		'engineStorageDriver',
		'genericConfig',
		'packetConfig',
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
	 * @api-type string
	 * @var string
	 */
	protected $agentState;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $computeTotal;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[hostTemplate]
	 * @var string
	 */
	protected $hostTemplateId;

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
	 * @api-type int
	 * @var int
	 */
	protected $localStorageMb;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memory;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $milliCpu;

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
	 * @api-type reference[physicalHost]
	 * @var string
	 */
	protected $physicalHostId;

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
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

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
	 * @api-type json
	 * @var array
	 */
	protected $info;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $hostname;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $agentIpAddress;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type array[reference[instance]]
	 * @var string[][]
	 */
	protected $instanceIds = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $labels = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type array[publicEndpoint]
	 * @var PublicEndpoint[]
	 */
	protected $publicEndpoints = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type amazonec2Config
	 * @var Amazonec2Config
	 */
	protected $amazonec2Config;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $authCertificateAuthority;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $authKey;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type azureConfig
	 * @var AzureConfig
	 */
	protected $azureConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type digitaloceanConfig
	 * @var DigitaloceanConfig
	 */
	protected $digitaloceanConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $dockerVersion;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
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
	protected $engineEnv = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $engineInsecureRegistry = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $engineInstallUrl;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $engineLabel = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $engineOpt = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $engineRegistryMirror = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $engineStorageDriver;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type genericConfig
	 * @var GenericConfig
	 */
	protected $genericConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type packetConfig
	 * @var PacketConfig
	 */
	protected $packetConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/host',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/hosts',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $hostname)
	{
		$result = new static();
		$result->hostname = $hostname;
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
	public function getAgentState(): string
	{
		return $this->agentState;
	}


	/**
	 * @simple-getter
	 */
	public function getComputeTotal(): int
	{
		return $this->computeTotal;
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
	 * @return string
	 */
	public function getHostTemplateId(): string
	{
		return $this->hostTemplateId;
	}


	/**
	 * --> getter from reference: reference[hostTemplate]
	 */
	public function getHostTemplate(): ?HostTemplate
	{
		return $this->client()->getHostTemplate($this->hostTemplateId);
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
	public function getLocalStorageMb(): int
	{
		return $this->localStorageMb;
	}


	public function setLocalStorageMb(int $value = NULL)
	{
		$this->localStorageMb = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getMemory(): int
	{
		return $this->memory;
	}


	public function setMemory(int $value = NULL)
	{
		$this->memory = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getMilliCpu(): int
	{
		return $this->milliCpu;
	}


	public function setMilliCpu(int $value = NULL)
	{
		$this->milliCpu = $value;
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
	 * @return string
	 */
	public function getPhysicalHostId(): string
	{
		return $this->physicalHostId;
	}


	/**
	 * --> getter from reference: reference[physicalHost]
	 */
	public function getPhysicalHost(): ?PhysicalHost
	{
		return $this->client()->getPhysicalHost($this->physicalHostId);
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
	 */
	public function getUuid(): string
	{
		return $this->uuid;
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
	public function getInfo(): array
	{
		return $this->info;
	}


	/**
	 * @simple-getter
	 */
	public function getHostname(): string
	{
		return $this->hostname;
	}


	/**
	 * @simple-getter
	 */
	public function getAgentIpAddress(): string
	{
		return $this->agentIpAddress;
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
	 * @return string[]
	 */
	public function getLabels(): array
	{
		return $this->labels;
	}


	public function setLabels(array $value = NULL)
	{
		$this->labels = $value;
	}


	/**
	 * @simple-getter
	 * @return PublicEndpoint[]
	 */
	public function getPublicEndpoints(): array
	{
		return $this->publicEndpoints;
	}


	/**
	 * @simple-getter
	 * @return Amazonec2Config
	 */
	public function getAmazonec2Config(): Amazonec2Config
	{
		return $this->amazonec2Config;
	}


	public function setAmazonec2Config(Amazonec2Config $value = NULL)
	{
		$this->amazonec2Config = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getAuthCertificateAuthority(): string
	{
		return $this->authCertificateAuthority;
	}


	public function setAuthCertificateAuthority(string $value = NULL)
	{
		$this->authCertificateAuthority = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getAuthKey(): string
	{
		return $this->authKey;
	}


	public function setAuthKey(string $value = NULL)
	{
		$this->authKey = $value;
	}


	/**
	 * @simple-getter
	 * @return AzureConfig
	 */
	public function getAzureConfig(): AzureConfig
	{
		return $this->azureConfig;
	}


	public function setAzureConfig(AzureConfig $value = NULL)
	{
		$this->azureConfig = $value;
	}


	/**
	 * @simple-getter
	 * @return DigitaloceanConfig
	 */
	public function getDigitaloceanConfig(): DigitaloceanConfig
	{
		return $this->digitaloceanConfig;
	}


	public function setDigitaloceanConfig(DigitaloceanConfig $value = NULL)
	{
		$this->digitaloceanConfig = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getDockerVersion(): string
	{
		return $this->dockerVersion;
	}


	public function setDockerVersion(string $value = NULL)
	{
		$this->dockerVersion = $value;
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
	public function getEngineEnv(): array
	{
		return $this->engineEnv;
	}


	public function setEngineEnv(array $value = NULL)
	{
		$this->engineEnv = $value;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEngineInsecureRegistry(): array
	{
		return $this->engineInsecureRegistry;
	}


	public function setEngineInsecureRegistry(array $value = NULL)
	{
		$this->engineInsecureRegistry = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getEngineInstallUrl(): string
	{
		return $this->engineInstallUrl;
	}


	public function setEngineInstallUrl(string $value = NULL)
	{
		$this->engineInstallUrl = $value;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEngineLabel(): array
	{
		return $this->engineLabel;
	}


	public function setEngineLabel(array $value = NULL)
	{
		$this->engineLabel = $value;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEngineOpt(): array
	{
		return $this->engineOpt;
	}


	public function setEngineOpt(array $value = NULL)
	{
		$this->engineOpt = $value;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEngineRegistryMirror(): array
	{
		return $this->engineRegistryMirror;
	}


	public function setEngineRegistryMirror(array $value = NULL)
	{
		$this->engineRegistryMirror = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getEngineStorageDriver(): string
	{
		return $this->engineStorageDriver;
	}


	public function setEngineStorageDriver(string $value = NULL)
	{
		$this->engineStorageDriver = $value;
	}


	/**
	 * @simple-getter
	 * @return GenericConfig
	 */
	public function getGenericConfig(): GenericConfig
	{
		return $this->genericConfig;
	}


	public function setGenericConfig(GenericConfig $value = NULL)
	{
		$this->genericConfig = $value;
	}


	/**
	 * @simple-getter
	 * @return PacketConfig
	 */
	public function getPacketConfig(): PacketConfig
	{
		return $this->packetConfig;
	}


	public function setPacketConfig(PacketConfig $value = NULL)
	{
		$this->packetConfig = $value;
	}

}
