<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\PidModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Container extends Instance
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'count',
		'createIndex',
		'created',
		'deploymentUnitUuid',
		'description',
		'expose',
		'externalId',
		'firstRunning',
		'healthState',
		'hostId',
		'hostname',
		'id',
		'imageUuid',
		'instanceTriggeredStop',
		'kind',
		'memoryReservation',
		'milliCpuReservation',
		'mounts',
		'name',
		'nativeContainer',
		'networkContainerId',
		'networkIds',
		'ports',
		'primaryIpAddress',
		'registryCredentialId',
		'removed',
		'requestedHostId',
		'serviceId',
		'serviceIds',
		'stackId',
		'startCount',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'version',
		'volumeDriver',
		'environment',
		'command',
		'workingDir',
		'user',
		'publishAllPorts',
		'primaryNetworkId',
		'privileged',
		'capAdd',
		'capDrop',
		'dns',
		'dnsSearch',
		'instanceLinks',
		'domainName',
		'memorySwap',
		'memory',
		'cpuSet',
		'cpuShares',
		'stdinOpen',
		'tty',
		'entryPoint',
		'lxcConf',
		'restartPolicy',
		'devices',
		'blkioDeviceOptions',
		'labels',
		'healthCheck',
		'securityOpt',
		'logConfig',
		'pidMode',
		'extraHosts',
		'readOnly',
		'build',
		'dataVolumeMounts',
		'blkioWeight',
		'cgroupParent',
		'usernsMode',
		'pidsLimit',
		'diskQuota',
		'cpuCount',
		'cpuPercent',
		'ioMaximumIOps',
		'ioMaximumBandwidth',
		'cpuPeriod',
		'cpuQuota',
		'cpuSetMems',
		'dnsOpt',
		'groupAdd',
		'isolation',
		'kernelMemory',
		'memorySwappiness',
		'oomKillDisable',
		'shmSize',
		'tmpfs',
		'uts',
		'ipcMode',
		'stopSignal',
		'sysctls',
		'storageOpt',
		'oomScoreAdj',
		'ulimits',
		'ip',
		'ip6',
		'netAlias',
		'healthCmd',
		'healthInterval',
		'healthTimeout',
		'healthRetries',
		'secrets',
		'userPorts',
		'networkMode',
		'dataVolumes',
		'dataVolumesFrom',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $count;

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
	 * @api-type string
	 * @var string
	 */
	protected $deploymentUnitUuid;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $expose = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $firstRunning;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type enum
	 * @var HealthStateEnum
	 */
	protected $healthState;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $hostname;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $imageUuid;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type enum
	 * @var InstanceTriggeredStopEnum
	 */
	protected $instanceTriggeredStop;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memoryReservation;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $milliCpuReservation;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type array[mountEntry]
	 * @var MountEntry[]
	 */
	protected $mounts = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $nativeContainer;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[container]
	 * @var string
	 */
	protected $networkContainerId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[reference[network]]
	 * @var string[][]
	 */
	protected $networkIds = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $ports = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $primaryIpAddress;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[registryCredential]
	 * @var string
	 */
	protected $registryCredentialId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[host]
	 * @var string
	 */
	protected $requestedHostId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[service]
	 * @var string
	 */
	protected $serviceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type array[reference[service]]
	 * @var string[][]
	 */
	protected $serviceIds = [];

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
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $startCount;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $startOnCreate;

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
	 * @api-type string
	 * @var string
	 */
	protected $version;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $volumeDriver;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $environment = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $command = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $workingDir;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $user;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $publishAllPorts;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type reference[network]
	 * @var string
	 */
	protected $primaryNetworkId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $privileged;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[enum]
	 * @var []
	 */
	protected $capAdd = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[enum]
	 * @var []
	 */
	protected $capDrop = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dns = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dnsSearch = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[reference[instance]]
	 * @var Reference[instance]Map
	 */
	protected $instanceLinks = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $domainName;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memorySwap;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memory;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $cpuSet;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cpuShares;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $stdinOpen;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $tty;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $entryPoint = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $lxcConf = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type restartPolicy
	 * @var RestartPolicy
	 */
	protected $restartPolicy;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $devices = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[blkioDeviceOption]
	 * @var BlkioDeviceOptionMap
	 */
	protected $blkioDeviceOptions = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $labels = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type instanceHealthCheck
	 * @var InstanceHealthCheck
	 */
	protected $healthCheck;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $securityOpt = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type logConfig
	 * @var LogConfig
	 */
	protected $logConfig;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type enum
	 * @var PidModeEnum
	 */
	protected $pidMode;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $extraHosts = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $readOnly;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type dockerBuild
	 * @var DockerBuild
	 */
	protected $build;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[reference[volume]]
	 * @var Reference[volume]Map
	 */
	protected $dataVolumeMounts = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $blkioWeight;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $cgroupParent;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $usernsMode;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $pidsLimit;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $diskQuota;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cpuCount;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cpuPercent;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $ioMaximumIOps;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $ioMaximumBandwidth;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cpuPeriod;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cpuQuota;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $cpuSetMems;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dnsOpt = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $groupAdd = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $isolation;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $kernelMemory;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memorySwappiness;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $oomKillDisable;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $shmSize;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $tmpfs = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uts;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $ipcMode;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $stopSignal;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $sysctls = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $storageOpt = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $oomScoreAdj;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[ulimit]
	 * @var Ulimit[]
	 */
	protected $ulimits = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $ip;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $ip6;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $netAlias = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $healthCmd = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $healthInterval;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $healthTimeout;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $healthRetries;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[secretReference]
	 * @var SecretReference[]
	 */
	protected $secrets = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $userPorts = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $networkMode;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dataVolumes = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[reference[container]]
	 * @var weird[]
	 */
	protected $dataVolumesFrom = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/container',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/containers',
	];


	/**
	 * @simple-getter
	 */
	public function getCount(): int
	{
		return $this->count;
	}


	/**
	 * @simple-getter
	 */
	public function getCreateIndex(): int
	{
		return $this->createIndex;
	}


	/**
	 * @simple-getter
	 */
	public function getDeploymentUnitUuid(): string
	{
		return $this->deploymentUnitUuid;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getExpose(): array
	{
		return $this->expose;
	}


	/**
	 * @simple-getter
	 */
	public function getFirstRunning(): DateTimeInterface
	{
		return $this->firstRunning;
	}


	/**
	 * @simple-getter
	 * @return HealthStateEnum
	 */
	public function getHealthState(): HealthStateEnum
	{
		return $this->healthState;
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
	public function getImageUuid(): string
	{
		return $this->imageUuid;
	}


	/**
	 * @simple-getter
	 * @return InstanceTriggeredStopEnum
	 */
	public function getInstanceTriggeredStop(): InstanceTriggeredStopEnum
	{
		return $this->instanceTriggeredStop;
	}


	/**
	 * @simple-getter
	 */
	public function getMemoryReservation(): int
	{
		return $this->memoryReservation;
	}


	/**
	 * @simple-getter
	 */
	public function getMilliCpuReservation(): int
	{
		return $this->milliCpuReservation;
	}


	/**
	 * @simple-getter
	 * @return MountEntry[]
	 */
	public function getMounts(): array
	{
		return $this->mounts;
	}


	/**
	 * @simple-getter
	 */
	public function getNativeContainer(): \boolean
	{
		return $this->nativeContainer;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getNetworkContainerId(): string
	{
		return $this->networkContainerId;
	}


	/**
	 * --> getter from reference: reference[container]
	 */
	public function getNetworkContainer(): ?NetworkContainer
	{
		return $this->client()->getNetworkContainer($this->networkContainerId);
	}


	/**
	 * @simple-getter
	 * @return string[][]
	 */
	public function getNetworkIds(): array
	{
		return $this->networkIds;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getPorts(): array
	{
		return $this->ports;
	}


	/**
	 * @simple-getter
	 */
	public function getPrimaryIpAddress(): string
	{
		return $this->primaryIpAddress;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getRegistryCredentialId(): string
	{
		return $this->registryCredentialId;
	}


	/**
	 * --> getter from reference: reference[registryCredential]
	 */
	public function getRegistryCredential(): ?RegistryCredential
	{
		return $this->client()->getRegistryCredential($this->registryCredentialId);
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getRequestedHostId(): string
	{
		return $this->requestedHostId;
	}


	/**
	 * --> getter from reference: reference[host]
	 */
	public function getRequestedHost(): ?RequestedHost
	{
		return $this->client()->getRequestedHost($this->requestedHostId);
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getServiceId(): string
	{
		return $this->serviceId;
	}


	/**
	 * --> getter from reference: reference[service]
	 */
	public function getService(): ?Service
	{
		return $this->client()->getService($this->serviceId);
	}


	/**
	 * @simple-getter
	 * @return string[][]
	 */
	public function getServiceIds(): array
	{
		return $this->serviceIds;
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
	public function getStartCount(): int
	{
		return $this->startCount;
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
	 */
	public function getSystem(): \boolean
	{
		return $this->system;
	}


	/**
	 * @simple-getter
	 */
	public function getVersion(): string
	{
		return $this->version;
	}


	/**
	 * @simple-getter
	 */
	public function getVolumeDriver(): string
	{
		return $this->volumeDriver;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEnvironment(): array
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getCommand(): array
	{
		return $this->command;
	}


	/**
	 * @simple-getter
	 */
	public function getWorkingDir(): string
	{
		return $this->workingDir;
	}


	/**
	 * @simple-getter
	 */
	public function getUser(): string
	{
		return $this->user;
	}


	/**
	 * @simple-getter
	 */
	public function getPublishAllPorts(): \boolean
	{
		return $this->publishAllPorts;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getPrimaryNetworkId(): string
	{
		return $this->primaryNetworkId;
	}


	/**
	 * --> getter from reference: reference[network]
	 */
	public function getPrimaryNetwork(): ?PrimaryNetwork
	{
		return $this->client()->getPrimaryNetwork($this->primaryNetworkId);
	}


	/**
	 * @simple-getter
	 */
	public function getPrivileged(): \boolean
	{
		return $this->privileged;
	}


	/**
	 * @simple-getter
	 * @return []
	 */
	public function getCapAdd(): array
	{
		return $this->capAdd;
	}


	/**
	 * @simple-getter
	 * @return []
	 */
	public function getCapDrop(): array
	{
		return $this->capDrop;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDns(): array
	{
		return $this->dns;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDnsSearch(): array
	{
		return $this->dnsSearch;
	}


	/**
	 * @simple-getter
	 * @return Reference[instance]Map
	 */
	public function getInstanceLinks(): SamIT\Rancher\Generated\Entities\Reference[instance]Map
	{
		return $this->instanceLinks;
	}


	/**
	 * @simple-getter
	 */
	public function getDomainName(): string
	{
		return $this->domainName;
	}


	/**
	 * @simple-getter
	 */
	public function getMemorySwap(): int
	{
		return $this->memorySwap;
	}


	/**
	 * @simple-getter
	 */
	public function getMemory(): int
	{
		return $this->memory;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuSet(): string
	{
		return $this->cpuSet;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuShares(): int
	{
		return $this->cpuShares;
	}


	/**
	 * @simple-getter
	 */
	public function getStdinOpen(): \boolean
	{
		return $this->stdinOpen;
	}


	/**
	 * @simple-getter
	 */
	public function getTty(): \boolean
	{
		return $this->tty;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEntryPoint(): array
	{
		return $this->entryPoint;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getLxcConf(): array
	{
		return $this->lxcConf;
	}


	/**
	 * @simple-getter
	 * @return RestartPolicy
	 */
	public function getRestartPolicy(): RestartPolicy
	{
		return $this->restartPolicy;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDevices(): array
	{
		return $this->devices;
	}


	/**
	 * @simple-getter
	 * @return BlkioDeviceOptionMap
	 */
	public function getBlkioDeviceOptions(): SamIT\Rancher\Generated\Entities\BlkioDeviceOptionMap
	{
		return $this->blkioDeviceOptions;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getLabels(): array
	{
		return $this->labels;
	}


	/**
	 * @simple-getter
	 * @return InstanceHealthCheck
	 */
	public function getHealthCheck(): InstanceHealthCheck
	{
		return $this->healthCheck;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getSecurityOpt(): array
	{
		return $this->securityOpt;
	}


	/**
	 * @simple-getter
	 * @return LogConfig
	 */
	public function getLogConfig(): LogConfig
	{
		return $this->logConfig;
	}


	/**
	 * @simple-getter
	 * @return PidModeEnum
	 */
	public function getPidMode(): PidModeEnum
	{
		return $this->pidMode;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getExtraHosts(): array
	{
		return $this->extraHosts;
	}


	/**
	 * @simple-getter
	 */
	public function getReadOnly(): \boolean
	{
		return $this->readOnly;
	}


	/**
	 * @simple-getter
	 * @return DockerBuild
	 */
	public function getBuild(): DockerBuild
	{
		return $this->build;
	}


	/**
	 * @simple-getter
	 * @return Reference[volume]Map
	 */
	public function getDataVolumeMounts(): SamIT\Rancher\Generated\Entities\Reference[volume]Map
	{
		return $this->dataVolumeMounts;
	}


	/**
	 * @simple-getter
	 */
	public function getBlkioWeight(): int
	{
		return $this->blkioWeight;
	}


	/**
	 * @simple-getter
	 */
	public function getCgroupParent(): string
	{
		return $this->cgroupParent;
	}


	/**
	 * @simple-getter
	 */
	public function getUsernsMode(): string
	{
		return $this->usernsMode;
	}


	/**
	 * @simple-getter
	 */
	public function getPidsLimit(): int
	{
		return $this->pidsLimit;
	}


	/**
	 * @simple-getter
	 */
	public function getDiskQuota(): int
	{
		return $this->diskQuota;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuCount(): int
	{
		return $this->cpuCount;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuPercent(): int
	{
		return $this->cpuPercent;
	}


	/**
	 * @simple-getter
	 */
	public function getIoMaximumIOps(): int
	{
		return $this->ioMaximumIOps;
	}


	/**
	 * @simple-getter
	 */
	public function getIoMaximumBandwidth(): int
	{
		return $this->ioMaximumBandwidth;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuPeriod(): int
	{
		return $this->cpuPeriod;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuQuota(): int
	{
		return $this->cpuQuota;
	}


	/**
	 * @simple-getter
	 */
	public function getCpuSetMems(): string
	{
		return $this->cpuSetMems;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDnsOpt(): array
	{
		return $this->dnsOpt;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getGroupAdd(): array
	{
		return $this->groupAdd;
	}


	/**
	 * @simple-getter
	 */
	public function getIsolation(): string
	{
		return $this->isolation;
	}


	/**
	 * @simple-getter
	 */
	public function getKernelMemory(): int
	{
		return $this->kernelMemory;
	}


	/**
	 * @simple-getter
	 */
	public function getMemorySwappiness(): int
	{
		return $this->memorySwappiness;
	}


	/**
	 * @simple-getter
	 */
	public function getOomKillDisable(): \boolean
	{
		return $this->oomKillDisable;
	}


	/**
	 * @simple-getter
	 */
	public function getShmSize(): int
	{
		return $this->shmSize;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getTmpfs(): array
	{
		return $this->tmpfs;
	}


	/**
	 * @simple-getter
	 */
	public function getUts(): string
	{
		return $this->uts;
	}


	/**
	 * @simple-getter
	 */
	public function getIpcMode(): string
	{
		return $this->ipcMode;
	}


	/**
	 * @simple-getter
	 */
	public function getStopSignal(): string
	{
		return $this->stopSignal;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getSysctls(): array
	{
		return $this->sysctls;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getStorageOpt(): array
	{
		return $this->storageOpt;
	}


	/**
	 * @simple-getter
	 */
	public function getOomScoreAdj(): int
	{
		return $this->oomScoreAdj;
	}


	/**
	 * @simple-getter
	 * @return Ulimit[]
	 */
	public function getUlimits(): array
	{
		return $this->ulimits;
	}


	/**
	 * @simple-getter
	 */
	public function getIp(): string
	{
		return $this->ip;
	}


	/**
	 * @simple-getter
	 */
	public function getIp6(): string
	{
		return $this->ip6;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getNetAlias(): array
	{
		return $this->netAlias;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getHealthCmd(): array
	{
		return $this->healthCmd;
	}


	/**
	 * @simple-getter
	 */
	public function getHealthInterval(): int
	{
		return $this->healthInterval;
	}


	/**
	 * @simple-getter
	 */
	public function getHealthTimeout(): int
	{
		return $this->healthTimeout;
	}


	/**
	 * @simple-getter
	 */
	public function getHealthRetries(): int
	{
		return $this->healthRetries;
	}


	/**
	 * @simple-getter
	 * @return SecretReference[]
	 */
	public function getSecrets(): array
	{
		return $this->secrets;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getUserPorts(): array
	{
		return $this->userPorts;
	}


	/**
	 * @simple-getter
	 */
	public function getNetworkMode(): string
	{
		return $this->networkMode;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDataVolumes(): array
	{
		return $this->dataVolumes;
	}


	/**
	 * @simple-getter
	 * @return weird[]
	 */
	public function getDataVolumesFrom(): array
	{
		return $this->dataVolumesFrom;
	}

}
