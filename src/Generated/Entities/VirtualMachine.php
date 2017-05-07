<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Generated\Maps\BlkioDeviceOptionMap;
use SamIT\Rancher\Generated\Maps\InstanceMap;
use SamIT\Rancher\Types\StringMap;

class VirtualMachine extends Container
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'blkioDeviceOptions',
		'blkioWeight',
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
		'deploymentUnitUuid',
		'description',
		'diskQuota',
		'dns',
		'dnsOpt',
		'dnsSearch',
		'domainName',
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
		'memory',
		'memoryMb',
		'memoryReservation',
		'memorySwap',
		'memorySwappiness',
		'milliCpuReservation',
		'mounts',
		'name',
		'nativeContainer',
		'netAlias',
		'networkIds',
		'networkMode',
		'oomKillDisable',
		'oomScoreAdj',
		'pidsLimit',
		'ports',
		'primaryIpAddress',
		'primaryNetworkId',
		'registryCredentialId',
		'removed',
		'requestedHostId',
		'restartPolicy',
		'securityOpt',
		'serviceId',
		'serviceIds',
		'shmSize',
		'stackId',
		'startCount',
		'startOnCreate',
		'state',
		'stopSignal',
		'storageOpt',
		'sysctls',
		'system',
		'tmpfs',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'ulimits',
		'userPorts',
		'userdata',
		'usernsMode',
		'uts',
		'uuid',
		'version',
		'volumeDriver',
		'vcpu',
		'disks',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $memoryMb;

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
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/virtualmachine',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/virtualmachines',
	];


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMemoryMb(): ?int
	{
		return $this->memoryMb;
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
