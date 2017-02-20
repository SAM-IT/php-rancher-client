<?php
namespace SamIT\Rancher\Generated\Entities;

class VirtualMachine extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[agent]
	 */
	public $agentId;

	/** @var string */
	public $allocationState;

	/** @var BlkioDeviceOptionMap */
	public $blkioDeviceOptions = [];

	/** @var int */
	public $blkioWeight;

	/** @var string */
	public $cgroupParent;

	/** @var string[] */
	public $command = [];

	/** @var int */
	public $count;

	/** @var int */
	public $cpuCount;

	/** @var int */
	public $cpuPercent;

	/** @var int */
	public $cpuPeriod;

	/** @var int */
	public $cpuQuota;

	/** @var string */
	public $cpuSet;

	/** @var string */
	public $cpuSetMems;

	/** @var int */
	public $cpuShares;

	/** @var int */
	public $createIndex;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $deploymentUnitUuid;

	/** @var string */
	public $description;

	/** @var int */
	public $diskQuota;

	/** @var string[] */
	public $dns = [];

	/** @var string[] */
	public $dnsOpt = [];

	/** @var string[] */
	public $dnsSearch = [];

	/** @var string */
	public $domainName;

	/** @var string[] */
	public $expose = [];

	/** @var string */
	public $externalId;

	/** @var string[] */
	public $extraHosts = [];

	/** @var date */
	public $firstRunning;

	/** @var string[] */
	public $groupAdd = [];

	/** @var instanceHealthCheck */
	public $healthCheck;

	/** @var string[] */
	public $healthCmd = [];

	/** @var int */
	public $healthInterval;

	/** @var int */
	public $healthRetries;

	/** @var \SamIT\Rancher\Generated\Enums\HealthStateEnum */
	public $healthState;

	/** @var int */
	public $healthTimeout;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var string */
	public $hostname;

	/** @var int */
	public $id;

	/** @var string */
	public $imageUuid;

	/** @var Reference[instance]Map */
	public $instanceLinks = [];

	/** @var \SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum */
	public $instanceTriggeredStop;

	/** @var int */
	public $ioMaximumBandwidth;

	/** @var int */
	public $ioMaximumIOps;

	/** @var string */
	public $ip;

	/** @var string */
	public $ip6;

	/** @var string */
	public $ipcMode;

	/** @var string */
	public $isolation;

	/** @var int */
	public $kernelMemory;

	/** @var string */
	public $kind;

	/** @var StringMap */
	public $labels = [];

	/** @var logConfig */
	public $logConfig;

	/** @var int */
	public $memory;

	/** @var int */
	public $memoryMb;

	/** @var int */
	public $memoryReservation;

	/** @var int */
	public $memorySwap;

	/** @var int */
	public $memorySwappiness;

	/** @var int */
	public $milliCpuReservation;

	/** @var mountEntry[] */
	public $mounts = [];

	/** @var string */
	public $name;

	/** @var boolean */
	public $nativeContainer;

	/** @var string[] */
	public $netAlias = [];

	/** @var reference[network][] */
	public $networkIds = [];

	/** @var string */
	public $networkMode;

	/** @var boolean */
	public $oomKillDisable;

	/** @var int */
	public $oomScoreAdj;

	/** @var int */
	public $pidsLimit;

	/** @var string[] */
	public $ports = [];

	/** @var string */
	public $primaryIpAddress;

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $primaryNetworkId;

	/**
	 * @var string
	 * @api-type reference[registryCredential]
	 */
	public $registryCredentialId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $requestedHostId;

	/** @var restartPolicy */
	public $restartPolicy;

	/** @var string[] */
	public $securityOpt = [];

	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var int */
	public $shmSize;

	/** @var int */
	public $startCount;

	/** @var boolean */
	public $startOnCreate;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var string */
	public $stopSignal;

	/** @var StringMap */
	public $storageOpt = [];

	/** @var StringMap */
	public $sysctls = [];

	/** @var boolean */
	public $system;

	/** @var StringMap */
	public $tmpfs = [];

	/** @var string */
	public $token;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var ulimit[] */
	public $ulimits = [];

	/** @var string[] */
	public $userPorts = [];

	/** @var string */
	public $userdata;

	/** @var string */
	public $usernsMode;

	/** @var string */
	public $uts;

	/** @var string */
	public $uuid;

	/** @var string */
	public $version;

	/** @var string */
	public $volumeDriver;

	/** @var int */
	public $vcpu;

	/** @var virtualMachineDisk[] */
	public $disks = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/virtualmachine',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/virtualmachines',
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


	public function getPrimaryNetwork(): PrimaryNetwork
	{
	}


	public function getRegistryCredential(): RegistryCredential
	{
	}


	public function getRequestedHost(): RequestedHost
	{
	}

}
