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
use SamIT\Rancher\Generated\Maps\BlkioDeviceOptionMap;
use SamIT\Rancher\Generated\Maps\InstanceMap;
use SamIT\Rancher\Generated\Maps\VolumeMap;
use SamIT\Rancher\Types\StringMap;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $requestedIpAddress;

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


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMemoryMb(): ?int
	{
		return $this->memoryMb;
	}


	public function setPorts(array $value = NULL)
	{
		$this->ports = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRequestedIpAddress(): ?string
	{
		return $this->requestedIpAddress;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUserdata(): ?string
	{
		return $this->userdata;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDataVolumesFromLaunchConfigs(): ?array
	{
		return $this->dataVolumesFromLaunchConfigs;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getNetworkLaunchConfig(): ?string
	{
		return $this->networkLaunchConfig;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getVcpu(): ?int
	{
		return $this->vcpu;
	}


	/**
	 * @simple-getter
	 * @api-type array[virtualMachineDisk]
	 * @return VirtualMachineDisk[]
	 */
	public function getDisks(): ?array
	{
		return $this->disks;
	}

}
