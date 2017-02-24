<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\AgenCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\InstanceLabelCollection;
use SamIT\Rancher\Generated\Collections\InstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\MountCollection;
use SamIT\Rancher\Generated\Collections\PortCollection;
use SamIT\Rancher\Generated\Collections\RegistryCredentiaCollection;
use SamIT\Rancher\Generated\Collections\ServiceCollection;
use SamIT\Rancher\Generated\Collections\ServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceLogCollection;
use SamIT\Rancher\Generated\Collections\TargetInstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class VirtualMachine extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'agentId',
		'allocationState',
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
		'data',
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
		'removeTime',
		'removed',
		'requestedHostId',
		'restartPolicy',
		'securityOpt',
		'serviceIds',
		'shmSize',
		'startCount',
		'startOnCreate',
		'state',
		'stopSignal',
		'storageOpt',
		'sysctls',
		'system',
		'tmpfs',
		'token',
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

	/** @var HealthStateEnum */
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

	/** @var InstanceTriggeredStopEnum */
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

	/** @var StateEnum */
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

	/** @var TransitioningEnum */
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


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getAgent(): AgenCollection
	{
		return $this->client->retrieveEntities($this->links['agent']);
	}


	public function getHost(): Host
	{
	}


	public function getPrimaryNetwork(): PrimaryNetwork
	{
	}


	public function getRegistryCredential(): RegistryCredentiaCollection
	{
		return $this->client->retrieveEntities($this->links['registryCredential']);
	}


	public function getRequestedHost(): RequestedHost
	{
	}


	public function getCredentials(): CredentialCollection
	{
		return $this->client->retrieveEntities($this->links['credentials']);
	}


	public function getInstances(): InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getHosts(): HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getVolumes(): VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getMounts(): MountCollection
	{
		return $this->client->retrieveEntities($this->links['mounts']);
	}


	public function getServiceEvents(): ServiceEventCollection
	{
		return $this->client->retrieveEntities($this->links['serviceEvents']);
	}


	public function getServiceExposeMaps(): ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getServices(): ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getPorts(): PortCollection
	{
		return $this->client->retrieveEntities($this->links['ports']);
	}


	public function getInstanceLinks(): InstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLinks']);
	}


	public function getHealthcheckInstanceHostMaps(): HealthcheckInstanceHostMapCollection
	{
		return $this->client->retrieveEntities($this->links['healthcheckInstanceHostMaps']);
	}


	public function getTargetInstanceLinks(): TargetInstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['targetInstanceLinks']);
	}


	public function getInstanceLabels(): InstanceLabelCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLabels']);
	}


	public function getServiceLogs(): ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}

}
