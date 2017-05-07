<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\KindEnum;
use SamIT\Rancher\Generated\Enums\PidModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class LaunchConfig extends Container
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'blkioDeviceOptions',
		'blkioWeight',
		'build',
		'capAdd',
		'capDrop',
		'cgroupParent',
		'command',
		'count',
		'cpuCount',
		'cpuPercent',
		'cpuPeriod',
		'cpuQuota',
		'cpuSet',
		'cpuSetMems',
		'cpuShares',
		'createIndex',
		'created',
		'dataVolumeMounts',
		'dataVolumes',
		'dataVolumesFrom',
		'deploymentUnitUuid',
		'description',
		'devices',
		'diskQuota',
		'dns',
		'dnsOpt',
		'dnsSearch',
		'domainName',
		'entryPoint',
		'environment',
		'expose',
		'externalId',
		'extraHosts',
		'firstRunning',
		'groupAdd',
		'healthCheck',
		'healthCmd',
		'healthInterval',
		'healthRetries',
		'healthState',
		'healthTimeout',
		'hostId',
		'hostname',
		'id',
		'imageUuid',
		'instanceLinks',
		'instanceTriggeredStop',
		'ioMaximumBandwidth',
		'ioMaximumIOps',
		'ip',
		'ip6',
		'ipcMode',
		'isolation',
		'kernelMemory',
		'kind',
		'labels',
		'logConfig',
		'lxcConf',
		'memory',
		'memoryMb',
		'memoryReservation',
		'memorySwap',
		'memorySwappiness',
		'milliCpuReservation',
		'mounts',
		'nativeContainer',
		'netAlias',
		'networkContainerId',
		'networkIds',
		'networkMode',
		'oomKillDisable',
		'oomScoreAdj',
		'pidMode',
		'pidsLimit',
		'ports',
		'primaryIpAddress',
		'primaryNetworkId',
		'privileged',
		'publishAllPorts',
		'readOnly',
		'registryCredentialId',
		'removed',
		'requestedHostId',
		'requestedIpAddress',
		'secrets',
		'securityOpt',
		'serviceId',
		'serviceIds',
		'shmSize',
		'stackId',
		'startCount',
		'startOnCreate',
		'state',
		'stdinOpen',
		'stopSignal',
		'storageOpt',
		'sysctls',
		'system',
		'tmpfs',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'tty',
		'ulimits',
		'user',
		'userPorts',
		'userdata',
		'usernsMode',
		'uts',
		'uuid',
		'version',
		'volumeDriver',
		'workingDir',
		'dataVolumesFromLaunchConfigs',
		'networkLaunchConfig',
		'vcpu',
		'disks',
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
	 * @api-update false
	 * @api-create false
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
	 * @api-create true
	 * @api-nullable true
	 * @api-type enum
	 * @var KindEnum
	 */
	protected $kind;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memoryMb;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $ports = [];

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
	 * @api-type string
	 * @var string
	 */
	protected $requestedIpAddress;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $userdata;

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
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dataVolumesFromLaunchConfigs = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $networkLaunchConfig;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $vcpu;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[virtualMachineDisk]
	 * @var VirtualMachineDisk[]
	 */
	protected $disks = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/launchconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $environment, array $labels, \boolean $privileged, \boolean $publishAllPorts, \boolean $readOnly, array $secrets, \boolean $startOnCreate, \boolean $stdinOpen, \boolean $tty)
	{
		$result = new static();
		$result->environment = $environment;
		$result->labels = $labels;
		$result->privileged = $privileged;
		$result->publishAllPorts = $publishAllPorts;
		$result->readOnly = $readOnly;
		$result->secrets = $secrets;
		$result->startOnCreate = $startOnCreate;
		$result->stdinOpen = $stdinOpen;
		$result->tty = $tty;
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
	 * @return KindEnum
	 */
	public function getKind(): KindEnum
	{
		return $this->kind;
	}


	/**
	 * @simple-getter
	 */
	public function getMemoryMb(): int
	{
		return $this->memoryMb;
	}


	public function setPorts(array $value = NULL)
	{
		$this->ports = $value;
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
	public function getRequestedIpAddress(): string
	{
		return $this->requestedIpAddress;
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
	public function getUserdata(): string
	{
		return $this->userdata;
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
	 * @return string[]
	 */
	public function getDataVolumesFromLaunchConfigs(): array
	{
		return $this->dataVolumesFromLaunchConfigs;
	}


	/**
	 * @simple-getter
	 */
	public function getNetworkLaunchConfig(): string
	{
		return $this->networkLaunchConfig;
	}


	/**
	 * @simple-getter
	 */
	public function getVcpu(): int
	{
		return $this->vcpu;
	}


	/**
	 * @simple-getter
	 * @return VirtualMachineDisk[]
	 */
	public function getDisks(): array
	{
		return $this->disks;
	}

}
