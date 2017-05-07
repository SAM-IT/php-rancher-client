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

class SecondaryLaunchConfig extends \SamIT\Rancher\Types\Entity
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
		'dataVolumesFromLaunchConfigs',
		'deploymentUnitUuid',
		'description',
		'devices',
		'diskQuota',
		'disks',
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
		'name',
		'nativeContainer',
		'netAlias',
		'networkContainerId',
		'networkIds',
		'networkLaunchConfig',
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
		'vcpu',
		'version',
		'volumeDriver',
		'workingDir',
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
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[blkioDeviceOption]
	 * @var BlkioDeviceOptionMap
	 */
	protected $blkioDeviceOptions = [];

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
	 * @api-type dockerBuild
	 * @var DockerBuild
	 */
	protected $build;

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
	 * @api-type string
	 * @var string
	 */
	protected $cgroupParent;

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
	 * @api-type int
	 * @var int
	 */
	protected $count;

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
	protected $cpuSet;

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
	 * @api-type int
	 * @var int
	 */
	protected $cpuShares;

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
	 * @var DateTimeInterface
	 */
	protected $created;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $deploymentUnitUuid;

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
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $devices = [];

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
	 * @api-type array[virtualMachineDisk]
	 * @var VirtualMachineDisk[]
	 */
	protected $disks = [];

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
	protected $dnsOpt = [];

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
	 * @api-type string
	 * @var string
	 */
	protected $domainName;

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
	protected $expose = [];

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $extraHosts = [];

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
	protected $healthRetries;

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
	 * @api-type int
	 * @var int
	 */
	protected $healthTimeout;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $hostname;

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
	 * @api-type string
	 * @var string
	 */
	protected $imageUuid;

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
	protected $ioMaximumBandwidth;

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
	 * @api-type enum
	 * @var KindEnum
	 */
	protected $kind;

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
	 * @api-type logConfig
	 * @var LogConfig
	 */
	protected $logConfig;

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
	 * @api-type int
	 * @var int
	 */
	protected $memory;

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
	protected $memorySwap;

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
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $name;

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
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $netAlias = [];

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
	 * @api-type string
	 * @var string
	 */
	protected $networkLaunchConfig;

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
	protected $oomScoreAdj;

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
	 * @api-type int
	 * @var int
	 */
	protected $pidsLimit;

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
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $primaryIpAddress;

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
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $publishAllPorts;

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
	 * @api-type reference[registryCredential]
	 * @var string
	 */
	protected $registryCredentialId;

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
	 * @api-type reference[host]
	 * @var string
	 */
	protected $requestedHostId;

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
	 * @api-nullable false
	 * @api-type array[secretReference]
	 * @var SecretReference[]
	 */
	protected $secrets = [];

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
	 * @api-type int
	 * @var int
	 */
	protected $shmSize;

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
	 * @api-type enum
	 * @var StateEnum
	 */
	protected $state;

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
	protected $storageOpt = [];

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
	 * @api-create false
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $system;

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
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $tty;

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
	protected $user;

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
	protected $userdata;

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
	 * @api-type string
	 * @var string
	 */
	protected $uts;

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
	 * @api-type int
	 * @var int
	 */
	protected $vcpu;

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
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $workingDir;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/secondarylaunchconfig',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $environment, array $labels, string $name, \boolean $privileged, \boolean $publishAllPorts, \boolean $readOnly, array $secrets, \boolean $startOnCreate, \boolean $stdinOpen, \boolean $tty)
	{
		$result = new static();
		$result->environment = $environment;
		$result->labels = $labels;
		$result->name = $name;
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
	 * @return BlkioDeviceOptionMap
	 */
	public function getBlkioDeviceOptions(): SamIT\Rancher\Generated\Entities\BlkioDeviceOptionMap
	{
		return $this->blkioDeviceOptions;
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
	 * @return DockerBuild
	 */
	public function getBuild(): DockerBuild
	{
		return $this->build;
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
	 */
	public function getCgroupParent(): string
	{
		return $this->cgroupParent;
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
	public function getCount(): int
	{
		return $this->count;
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
	public function getCpuSet(): string
	{
		return $this->cpuSet;
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
	 */
	public function getCpuShares(): int
	{
		return $this->cpuShares;
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
	public function getCreated(): DateTimeInterface
	{
		return $this->created;
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
	public function getDeploymentUnitUuid(): string
	{
		return $this->deploymentUnitUuid;
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
	 * @return string[]
	 */
	public function getDevices(): array
	{
		return $this->devices;
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
	 * @return VirtualMachineDisk[]
	 */
	public function getDisks(): array
	{
		return $this->disks;
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
	public function getDnsOpt(): array
	{
		return $this->dnsOpt;
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
	 */
	public function getDomainName(): string
	{
		return $this->domainName;
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
	public function getEnvironment(): array
	{
		return $this->environment;
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
	public function getExternalId(): string
	{
		return $this->externalId;
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
	public function getFirstRunning(): DateTimeInterface
	{
		return $this->firstRunning;
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
	public function getHealthRetries(): int
	{
		return $this->healthRetries;
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
	public function getHealthTimeout(): int
	{
		return $this->healthTimeout;
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
	public function getHostname(): string
	{
		return $this->hostname;
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
	public function getImageUuid(): string
	{
		return $this->imageUuid;
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
	 * @return InstanceTriggeredStopEnum
	 */
	public function getInstanceTriggeredStop(): InstanceTriggeredStopEnum
	{
		return $this->instanceTriggeredStop;
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
	public function getIoMaximumIOps(): int
	{
		return $this->ioMaximumIOps;
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
	 */
	public function getIpcMode(): string
	{
		return $this->ipcMode;
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
	 * @return KindEnum
	 */
	public function getKind(): KindEnum
	{
		return $this->kind;
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
	 * @return LogConfig
	 */
	public function getLogConfig(): LogConfig
	{
		return $this->logConfig;
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
	 */
	public function getMemory(): int
	{
		return $this->memory;
	}


	/**
	 * @simple-getter
	 */
	public function getMemoryMb(): int
	{
		return $this->memoryMb;
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
	public function getMemorySwap(): int
	{
		return $this->memorySwap;
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
	public function getName(): string
	{
		return $this->name;
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
	 * @return string[]
	 */
	public function getNetAlias(): array
	{
		return $this->netAlias;
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
	 */
	public function getNetworkLaunchConfig(): string
	{
		return $this->networkLaunchConfig;
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
	 */
	public function getOomKillDisable(): \boolean
	{
		return $this->oomKillDisable;
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
	 * @return PidModeEnum
	 */
	public function getPidMode(): PidModeEnum
	{
		return $this->pidMode;
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
	 * @return string[]
	 */
	public function getPorts(): array
	{
		return $this->ports;
	}


	public function setPorts(array $value = NULL)
	{
		$this->ports = $value;
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
	 */
	public function getPublishAllPorts(): \boolean
	{
		return $this->publishAllPorts;
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
	 */
	public function getRemoved(): DateTimeInterface
	{
		return $this->removed;
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
	 */
	public function getRequestedIpAddress(): string
	{
		return $this->requestedIpAddress;
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
	public function getSecurityOpt(): array
	{
		return $this->securityOpt;
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
	 */
	public function getShmSize(): int
	{
		return $this->shmSize;
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
	 * @return StateEnum
	 */
	public function getState(): StateEnum
	{
		return $this->state;
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
	public function getStopSignal(): string
	{
		return $this->stopSignal;
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
	 * @return string[]
	 */
	public function getSysctls(): array
	{
		return $this->sysctls;
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
	 * @return string[]
	 */
	public function getTmpfs(): array
	{
		return $this->tmpfs;
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
	public function getTty(): \boolean
	{
		return $this->tty;
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
	public function getUser(): string
	{
		return $this->user;
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
	public function getUserdata(): string
	{
		return $this->userdata;
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
	public function getUts(): string
	{
		return $this->uts;
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
	public function getVcpu(): int
	{
		return $this->vcpu;
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
	 */
	public function getWorkingDir(): string
	{
		return $this->workingDir;
	}

}
