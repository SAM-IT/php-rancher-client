<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\PidModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Container extends Instance
{
	/**
	 * @var string
	 * @api-type reference[agent]
	 */
	public $agentId;

	/** @var string */
	public $allocationState;

	/** @var int */
	public $count;

	/** @var int */
	public $createIndex;

	/** @var string */
	public $deploymentUnitUuid;

	/** @var string[] */
	public $expose = [];

	/** @var date */
	public $firstRunning;

	/** @var HealthStateEnum */
	public $healthState;

	/** @var string */
	public $hostname;

	/** @var string */
	public $imageUuid;

	/** @var InstanceTriggeredStopEnum */
	public $instanceTriggeredStop;

	/** @var int */
	public $memoryReservation;

	/** @var int */
	public $milliCpuReservation;

	/** @var mountEntry[] */
	public $mounts = [];

	/** @var boolean */
	public $nativeContainer;

	/**
	 * @var string
	 * @api-type reference[container]
	 */
	public $networkContainerId;

	/** @var reference[network][] */
	public $networkIds = [];

	/** @var string[] */
	public $ports = [];

	/** @var string */
	public $primaryIpAddress;

	/**
	 * @var string
	 * @api-type reference[registryCredential]
	 */
	public $registryCredentialId;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $requestedHostId;

	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var int */
	public $startCount;

	/** @var boolean */
	public $startOnCreate;

	/** @var boolean */
	public $system;

	/** @var string */
	public $token;

	/** @var string */
	public $version;

	/** @var string */
	public $volumeDriver;

	/** @var StringMap */
	public $environment = [];

	/** @var string[] */
	public $command = [];

	/** @var string */
	public $workingDir;

	/** @var string */
	public $user;

	/** @var boolean */
	public $publishAllPorts;

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $primaryNetworkId;

	/** @var boolean */
	public $privileged;

	/** @var enum[] */
	public $capAdd = [];

	/** @var enum[] */
	public $capDrop = [];

	/** @var string[] */
	public $dns = [];

	/** @var string[] */
	public $dnsSearch = [];

	/** @var Reference[instance]Map */
	public $instanceLinks = [];

	/** @var string */
	public $domainName;

	/** @var int */
	public $memorySwap;

	/** @var int */
	public $memory;

	/** @var string */
	public $cpuSet;

	/** @var int */
	public $cpuShares;

	/** @var boolean */
	public $stdinOpen;

	/** @var boolean */
	public $tty;

	/** @var string[] */
	public $entryPoint = [];

	/** @var StringMap */
	public $lxcConf = [];

	/** @var restartPolicy */
	public $restartPolicy;

	/** @var string[] */
	public $devices = [];

	/** @var BlkioDeviceOptionMap */
	public $blkioDeviceOptions = [];

	/** @var StringMap */
	public $labels = [];

	/** @var instanceHealthCheck */
	public $healthCheck;

	/** @var string[] */
	public $securityOpt = [];

	/** @var logConfig */
	public $logConfig;

	/** @var PidModeEnum */
	public $pidMode;

	/** @var string[] */
	public $extraHosts = [];

	/** @var boolean */
	public $readOnly;

	/** @var dockerBuild */
	public $build;

	/** @var Reference[volume]Map */
	public $dataVolumeMounts = [];

	/** @var int */
	public $blkioWeight;

	/** @var string */
	public $cgroupParent;

	/** @var string */
	public $usernsMode;

	/** @var int */
	public $pidsLimit;

	/** @var int */
	public $diskQuota;

	/** @var int */
	public $cpuCount;

	/** @var int */
	public $cpuPercent;

	/** @var int */
	public $ioMaximumIOps;

	/** @var int */
	public $ioMaximumBandwidth;

	/** @var int */
	public $cpuPeriod;

	/** @var int */
	public $cpuQuota;

	/** @var string */
	public $cpuSetMems;

	/** @var string[] */
	public $dnsOpt = [];

	/** @var string[] */
	public $groupAdd = [];

	/** @var string */
	public $isolation;

	/** @var int */
	public $kernelMemory;

	/** @var int */
	public $memorySwappiness;

	/** @var boolean */
	public $oomKillDisable;

	/** @var int */
	public $shmSize;

	/** @var StringMap */
	public $tmpfs = [];

	/** @var string */
	public $uts;

	/** @var string */
	public $ipcMode;

	/** @var string */
	public $stopSignal;

	/** @var StringMap */
	public $sysctls = [];

	/** @var StringMap */
	public $storageOpt = [];

	/** @var int */
	public $oomScoreAdj;

	/** @var ulimit[] */
	public $ulimits = [];

	/** @var string */
	public $ip;

	/** @var string */
	public $ip6;

	/** @var string[] */
	public $netAlias = [];

	/** @var string[] */
	public $healthCmd = [];

	/** @var int */
	public $healthInterval;

	/** @var int */
	public $healthTimeout;

	/** @var int */
	public $healthRetries;

	/** @var secretReference[] */
	public $secrets = [];

	/** @var string[] */
	public $userPorts = [];

	/** @var string */
	public $networkMode;

	/** @var string[] */
	public $dataVolumes = [];

	/** @var reference[container][] */
	public $dataVolumesFrom = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/container',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/containers',
	];


	public function getAccount(): Account
	{
	}


	public function getAgent(): Agent
	{
	}


	public function getHost(): Host
	{
	}


	public function getNetworkContainer(): NetworkContainer
	{
	}


	public function getRegistryCredential(): RegistryCredential
	{
	}


	public function getRequestedHost(): RequestedHost
	{
	}


	public function getPrimaryNetwork(): PrimaryNetwork
	{
	}

}
