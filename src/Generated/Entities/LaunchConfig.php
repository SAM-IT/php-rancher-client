<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\HealthStateEnum;
use SamIT\Rancher\Generated\Enums\InstanceTriggeredStopEnum;
use SamIT\Rancher\Generated\Enums\KindEnum;
use SamIT\Rancher\Generated\Enums\PidModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class LaunchConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'agentId',
		'allocationState',
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
		'data',
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
		'removeTime',
		'removed',
		'requestedHostId',
		'requestedIpAddress',
		'secrets',
		'securityOpt',
		'serviceIds',
		'shmSize',
		'startCount',
		'startOnCreate',
		'state',
		'stdinOpen',
		'stopSignal',
		'storageOpt',
		'sysctls',
		'system',
		'tmpfs',
		'token',
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

	/** @var dockerBuild */
	public $build;

	/** @var enum[] */
	public $capAdd = [];

	/** @var enum[] */
	public $capDrop = [];

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

	/** @var Reference[volume]Map */
	public $dataVolumeMounts = [];

	/** @var string[] */
	public $dataVolumes = [];

	/** @var reference[container][] */
	public $dataVolumesFrom = [];

	/** @var string */
	public $deploymentUnitUuid;

	/** @var string */
	public $description;

	/** @var string[] */
	public $devices = [];

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
	public $entryPoint = [];

	/** @var StringMap */
	public $environment = [];

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

	/** @var KindEnum */
	public $kind;

	/** @var StringMap */
	public $labels = [];

	/** @var logConfig */
	public $logConfig;

	/** @var StringMap */
	public $lxcConf = [];

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

	/** @var boolean */
	public $nativeContainer;

	/** @var string[] */
	public $netAlias = [];

	/**
	 * @var string
	 * @api-type reference[container]
	 */
	public $networkContainerId;

	/** @var reference[network][] */
	public $networkIds = [];

	/** @var string */
	public $networkMode;

	/** @var boolean */
	public $oomKillDisable;

	/** @var int */
	public $oomScoreAdj;

	/** @var PidModeEnum */
	public $pidMode;

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

	/** @var boolean */
	public $privileged;

	/** @var boolean */
	public $publishAllPorts;

	/** @var boolean */
	public $readOnly;

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

	/** @var string */
	public $requestedIpAddress;

	/** @var secretReference[] */
	public $secrets = [];

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

	/** @var boolean */
	public $stdinOpen;

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

	/** @var boolean */
	public $tty;

	/** @var ulimit[] */
	public $ulimits = [];

	/** @var string */
	public $user;

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

	/** @var string */
	public $workingDir;

	/** @var string[] */
	public $dataVolumesFromLaunchConfigs = [];

	/** @var string */
	public $networkLaunchConfig;

	/** @var int */
	public $vcpu;

	/** @var virtualMachineDisk[] */
	public $disks = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/launchconfig'];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getAgent(): \SamIT\Rancher\Generated\Collections\AgenCollection
	{
		return $this->client->retrieveEntities($this->links['agent']);
	}


	public function getHost(): Host
	{
	}


	public function getNetworkContainer(): \SamIT\Rancher\Generated\Collections\NetworkContaineCollection
	{
		return $this->client->retrieveEntities($this->links['networkContainer']);
	}


	public function getPrimaryNetwork(): PrimaryNetwork
	{
	}


	public function getRegistryCredential(): \SamIT\Rancher\Generated\Collections\RegistryCredentiaCollection
	{
		return $this->client->retrieveEntities($this->links['registryCredential']);
	}


	public function getRequestedHost(): RequestedHost
	{
	}


	public function getCredentials(): \SamIT\Rancher\Generated\Collections\CredentialCollection
	{
		return $this->client->retrieveEntities($this->links['credentials']);
	}


	public function getInstances(): \SamIT\Rancher\Generated\Collections\InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getHosts(): \SamIT\Rancher\Generated\Collections\HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getVolumes(): \SamIT\Rancher\Generated\Collections\VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getMounts(): \SamIT\Rancher\Generated\Collections\MountCollection
	{
		return $this->client->retrieveEntities($this->links['mounts']);
	}


	public function getServiceEvents(): \SamIT\Rancher\Generated\Collections\ServiceEventCollection
	{
		return $this->client->retrieveEntities($this->links['serviceEvents']);
	}


	public function getServiceExposeMaps(): \SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getServices(): \SamIT\Rancher\Generated\Collections\ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getPorts(): \SamIT\Rancher\Generated\Collections\PortCollection
	{
		return $this->client->retrieveEntities($this->links['ports']);
	}


	public function getInstanceLinks(): \SamIT\Rancher\Generated\Collections\InstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLinks']);
	}


	public function getHealthcheckInstanceHostMaps(): \SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection
	{
		return $this->client->retrieveEntities($this->links['healthcheckInstanceHostMaps']);
	}


	public function getTargetInstanceLinks(): \SamIT\Rancher\Generated\Collections\TargetInstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['targetInstanceLinks']);
	}


	public function getInstanceLabels(): \SamIT\Rancher\Generated\Collections\InstanceLabelCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLabels']);
	}


	public function getServiceLogs(): \SamIT\Rancher\Generated\Collections\ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}

}
