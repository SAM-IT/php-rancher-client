<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\PidModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Generated\Maps\BlkioDeviceOptionMap;
use SamIT\Rancher\Generated\Maps\InstanceMap;
use SamIT\Rancher\Generated\Maps\VolumeMap;
use SamIT\Rancher\Types\StringMap;

class Container extends \SamIT\Rancher\Types\Entity
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
	 * @api-type date
	 * @var \\DateTimeInterface
	 */
	protected $created;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var \\DateTimeInterface
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
	 * @api-type enum
	 * @var InstanceTriggeredStopEnum
	 */
	protected $instanceTriggeredStop;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var \\DateTimeInterface
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
	 * @var \\SamIT\Rancher\Types\StringMap
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
	 * @var \\SamIT\Rancher\Types\StringMap
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
	 * @var \\SamIT\Rancher\Types\StringMap
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
	 * @var \\SamIT\Rancher\Types\StringMap
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
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $sysctls = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
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


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $startOnCreate, StringMap $environment, \boolean $publishAllPorts, \boolean $privileged, \boolean $stdinOpen, \boolean $tty, StringMap $labels, \boolean $readOnly, array $secrets)
	{
		$result = new static();
		$result->startOnCreate = $startOnCreate;
		$result->environment = $environment;
		$result->publishAllPorts = $publishAllPorts;
		$result->privileged = $privileged;
		$result->stdinOpen = $stdinOpen;
		$result->tty = $tty;
		$result->labels = $labels;
		$result->readOnly = $readOnly;
		$result->secrets = $secrets;
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
	public function getCount(): ?int
	{
		return $this->count;
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
	public function getDeploymentUnitUuid(): ?string
	{
		return $this->deploymentUnitUuid;
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
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getExpose(): ?array
	{
		return $this->expose;
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
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getFirstRunning(): ?DateTimeInterface
	{
		return $this->firstRunning;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return HealthStateEnum
	 */
	public function getHealthState(): ?HealthStateEnum
	{
		return $this->healthState;
	}


	/**
	 * @simple-getter
	 * @api-type reference[host]
	 * @return string
	 */
	public function getHostId(): ?string
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
	 * @api-type string
	 */
	public function getHostname(): ?string
	{
		return $this->hostname;
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
	public function getImageUuid(): ?string
	{
		return $this->imageUuid;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return InstanceTriggeredStopEnum
	 */
	public function getInstanceTriggeredStop(): ?InstanceTriggeredStopEnum
	{
		return $this->instanceTriggeredStop;
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
	 * @api-type int
	 */
	public function getMemoryReservation(): ?int
	{
		return $this->memoryReservation;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMilliCpuReservation(): ?int
	{
		return $this->milliCpuReservation;
	}


	/**
	 * @simple-getter
	 * @api-type array[mountEntry]
	 * @return MountEntry[]
	 */
	public function getMounts(): array
	{
		return $this->mounts;
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
	 * @api-type boolean
	 */
	public function getNativeContainer(): \boolean
	{
		return $this->nativeContainer;
	}


	/**
	 * @simple-getter
	 * @api-type reference[container]
	 * @return string
	 */
	public function getNetworkContainerId(): ?string
	{
		return $this->networkContainerId;
	}


	/**
	 * --> getter from reference: reference[container]
	 */
	public function getNetworkContainer(): ?Container
	{
		return $this->client()->getNetworkContainer($this->networkContainerId);
	}


	/**
	 * @simple-getter
	 * @api-type array[reference[network]]
	 * @return string[][]
	 */
	public function getNetworkIds(): ?array
	{
		return $this->networkIds;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getPorts(): ?array
	{
		return $this->ports;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPrimaryIpAddress(): string
	{
		return $this->primaryIpAddress;
	}


	/**
	 * @simple-getter
	 * @api-type reference[registryCredential]
	 * @return string
	 */
	public function getRegistryCredentialId(): ?string
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
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getRemoved(): ?DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 * @api-type reference[host]
	 * @return string
	 */
	public function getRequestedHostId(): ?string
	{
		return $this->requestedHostId;
	}


	/**
	 * --> getter from reference: reference[host]
	 */
	public function getRequestedHost(): ?Host
	{
		return $this->client()->getRequestedHost($this->requestedHostId);
	}


	/**
	 * @simple-getter
	 * @api-type reference[service]
	 * @return string
	 */
	public function getServiceId(): ?string
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
	 * @api-type array[reference[service]]
	 * @return string[][]
	 */
	public function getServiceIds(): ?array
	{
		return $this->serviceIds;
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
	 * @api-type int
	 */
	public function getStartCount(): ?int
	{
		return $this->startCount;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getStartOnCreate(): \boolean
	{
		return $this->startOnCreate;
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
	public function getVersion(): string
	{
		return $this->version;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVolumeDriver(): ?string
	{
		return $this->volumeDriver;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getEnvironment(): \SamIT\Rancher\Types\StringMap
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getCommand(): ?array
	{
		return $this->command;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getWorkingDir(): ?string
	{
		return $this->workingDir;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUser(): ?string
	{
		return $this->user;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getPublishAllPorts(): \boolean
	{
		return $this->publishAllPorts;
	}


	/**
	 * @simple-getter
	 * @api-type reference[network]
	 * @return string
	 */
	public function getPrimaryNetworkId(): string
	{
		return $this->primaryNetworkId;
	}


	/**
	 * --> getter from reference: reference[network]
	 */
	public function getPrimaryNetwork(): ?Network
	{
		return $this->client()->getPrimaryNetwork($this->primaryNetworkId);
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getPrivileged(): \boolean
	{
		return $this->privileged;
	}


	/**
	 * @simple-getter
	 * @api-type array[enum]
	 * @return []
	 */
	public function getCapAdd(): ?array
	{
		return $this->capAdd;
	}


	/**
	 * @simple-getter
	 * @api-type array[enum]
	 * @return []
	 */
	public function getCapDrop(): ?array
	{
		return $this->capDrop;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDns(): ?array
	{
		return $this->dns;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDnsSearch(): ?array
	{
		return $this->dnsSearch;
	}


	/**
	 * @simple-getter
	 * @api-type map[reference[instance]]
	 * @return Reference[instance]Map
	 */
	public function getInstanceLinks(): ?\SamIT\Rancher\Generated\Maps\InstanceMap
	{
		return $this->instanceLinks;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDomainName(): ?string
	{
		return $this->domainName;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMemorySwap(): ?int
	{
		return $this->memorySwap;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMemory(): ?int
	{
		return $this->memory;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCpuSet(): ?string
	{
		return $this->cpuSet;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getCpuShares(): ?int
	{
		return $this->cpuShares;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getStdinOpen(): \boolean
	{
		return $this->stdinOpen;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getTty(): \boolean
	{
		return $this->tty;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getEntryPoint(): ?array
	{
		return $this->entryPoint;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getLxcConf(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->lxcConf;
	}


	/**
	 * @simple-getter
	 * @api-type restartPolicy
	 * @return RestartPolicy
	 */
	public function getRestartPolicy(): ?RestartPolicy
	{
		return $this->restartPolicy;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDevices(): ?array
	{
		return $this->devices;
	}


	/**
	 * @simple-getter
	 * @api-type map[blkioDeviceOption]
	 * @return BlkioDeviceOptionMap
	 */
	public function getBlkioDeviceOptions(): ?\SamIT\Rancher\Generated\Maps\BlkioDeviceOptionMap
	{
		return $this->blkioDeviceOptions;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getLabels(): \SamIT\Rancher\Types\StringMap
	{
		return $this->labels;
	}


	/**
	 * @simple-getter
	 * @api-type instanceHealthCheck
	 * @return InstanceHealthCheck
	 */
	public function getHealthCheck(): ?InstanceHealthCheck
	{
		return $this->healthCheck;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getSecurityOpt(): ?array
	{
		return $this->securityOpt;
	}


	/**
	 * @simple-getter
	 * @api-type logConfig
	 * @return LogConfig
	 */
	public function getLogConfig(): ?LogConfig
	{
		return $this->logConfig;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return PidModeEnum
	 */
	public function getPidMode(): ?PidModeEnum
	{
		return $this->pidMode;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getExtraHosts(): ?array
	{
		return $this->extraHosts;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getReadOnly(): \boolean
	{
		return $this->readOnly;
	}


	/**
	 * @simple-getter
	 * @api-type dockerBuild
	 * @return DockerBuild
	 */
	public function getBuild(): ?DockerBuild
	{
		return $this->build;
	}


	/**
	 * @simple-getter
	 * @api-type map[reference[volume]]
	 * @return Reference[volume]Map
	 */
	public function getDataVolumeMounts(): ?\SamIT\Rancher\Generated\Maps\VolumeMap
	{
		return $this->dataVolumeMounts;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getBlkioWeight(): ?int
	{
		return $this->blkioWeight;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCgroupParent(): ?string
	{
		return $this->cgroupParent;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUsernsMode(): ?string
	{
		return $this->usernsMode;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getPidsLimit(): ?int
	{
		return $this->pidsLimit;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getDiskQuota(): ?int
	{
		return $this->diskQuota;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getCpuCount(): ?int
	{
		return $this->cpuCount;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getCpuPercent(): ?int
	{
		return $this->cpuPercent;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getIoMaximumIOps(): ?int
	{
		return $this->ioMaximumIOps;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getIoMaximumBandwidth(): ?int
	{
		return $this->ioMaximumBandwidth;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getCpuPeriod(): ?int
	{
		return $this->cpuPeriod;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getCpuQuota(): ?int
	{
		return $this->cpuQuota;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCpuSetMems(): ?string
	{
		return $this->cpuSetMems;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDnsOpt(): ?array
	{
		return $this->dnsOpt;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getGroupAdd(): ?array
	{
		return $this->groupAdd;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIsolation(): ?string
	{
		return $this->isolation;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getKernelMemory(): ?int
	{
		return $this->kernelMemory;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getMemorySwappiness(): ?int
	{
		return $this->memorySwappiness;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getOomKillDisable(): ?\boolean
	{
		return $this->oomKillDisable;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getShmSize(): ?int
	{
		return $this->shmSize;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getTmpfs(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->tmpfs;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUts(): ?string
	{
		return $this->uts;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIpcMode(): ?string
	{
		return $this->ipcMode;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getStopSignal(): ?string
	{
		return $this->stopSignal;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getSysctls(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->sysctls;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getStorageOpt(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->storageOpt;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getOomScoreAdj(): ?int
	{
		return $this->oomScoreAdj;
	}


	/**
	 * @simple-getter
	 * @api-type array[ulimit]
	 * @return Ulimit[]
	 */
	public function getUlimits(): ?array
	{
		return $this->ulimits;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIp(): ?string
	{
		return $this->ip;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIp6(): ?string
	{
		return $this->ip6;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getNetAlias(): ?array
	{
		return $this->netAlias;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getHealthCmd(): ?array
	{
		return $this->healthCmd;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getHealthInterval(): ?int
	{
		return $this->healthInterval;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getHealthTimeout(): ?int
	{
		return $this->healthTimeout;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getHealthRetries(): ?int
	{
		return $this->healthRetries;
	}


	/**
	 * @simple-getter
	 * @api-type array[secretReference]
	 * @return SecretReference[]
	 */
	public function getSecrets(): array
	{
		return $this->secrets;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getUserPorts(): ?array
	{
		return $this->userPorts;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getNetworkMode(): ?string
	{
		return $this->networkMode;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDataVolumes(): ?array
	{
		return $this->dataVolumes;
	}


	/**
	 * @simple-getter
	 * @api-type array[reference[container]]
	 * @return weird[]
	 */
	public function getDataVolumesFrom(): ?array
	{
		return $this->dataVolumesFrom;
	}

}
