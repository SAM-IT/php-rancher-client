<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\AgenCollection;
use SamIT\Rancher\Generated\Collections\ClusterCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection;
use SamIT\Rancher\Generated\Collections\ContainerEventCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\HostLabelCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\IpAddresseCollection;
use SamIT\Rancher\Generated\Collections\PhysicalHosCollection;
use SamIT\Rancher\Generated\Collections\ServiceEventCollection;
use SamIT\Rancher\Generated\Collections\StoragePoolCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Host extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'agentId',
		'agentState',
		'computeTotal',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'localStorageMb',
		'memory',
		'milliCpu',
		'name',
		'physicalHostId',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'info',
		'hostname',
		'apiProxy',
		'agentIpAddress',
		'instanceIds',
		'labels',
		'publicEndpoints',
		'amazonec2Config',
		'authCertificateAuthority',
		'authKey',
		'azureConfig',
		'digitaloceanConfig',
		'dockerVersion',
		'driver',
		'engineEnv',
		'engineInsecureRegistry',
		'engineInstallUrl',
		'engineLabel',
		'engineOpt',
		'engineRegistryMirror',
		'engineStorageDriver',
		'genericConfig',
		'packetConfig',
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
	public $agentState;

	/** @var int */
	public $computeTotal;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var int */
	public $localStorageMb;

	/** @var int */
	public $memory;

	/** @var int */
	public $milliCpu;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[physicalHost]
	 */
	public $physicalHostId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var json */
	public $info;

	/** @var string */
	public $hostname;

	/** @var string */
	public $apiProxy;

	/** @var string */
	public $agentIpAddress;

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var StringMap */
	public $labels = [];

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var amazonec2Config */
	public $amazonec2Config;

	/** @var string */
	public $authCertificateAuthority;

	/** @var string */
	public $authKey;

	/** @var azureConfig */
	public $azureConfig;

	/** @var digitaloceanConfig */
	public $digitaloceanConfig;

	/** @var string */
	public $dockerVersion;

	/** @var string */
	public $driver;

	/** @var StringMap */
	public $engineEnv = [];

	/** @var string[] */
	public $engineInsecureRegistry = [];

	/** @var string */
	public $engineInstallUrl;

	/** @var StringMap */
	public $engineLabel = [];

	/** @var StringMap */
	public $engineOpt = [];

	/** @var string[] */
	public $engineRegistryMirror = [];

	/** @var string */
	public $engineStorageDriver;

	/** @var genericConfig */
	public $genericConfig;

	/** @var packetConfig */
	public $packetConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/host',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/hosts',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getAgent(): AgenCollection
	{
		return $this->client->retrieveEntities($this->links['agent']);
	}


	public function getPhysicalHost(): PhysicalHosCollection
	{
		return $this->client->retrieveEntities($this->links['physicalHost']);
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


	public function getServiceEvents(): ServiceEventCollection
	{
		return $this->client->retrieveEntities($this->links['serviceEvents']);
	}


	public function getHostLabels(): HostLabelCollection
	{
		return $this->client->retrieveEntities($this->links['hostLabels']);
	}


	public function getHealthcheckInstanceHostMaps(): HealthcheckInstanceHostMapCollection
	{
		return $this->client->retrieveEntities($this->links['healthcheckInstanceHostMaps']);
	}


	public function getIpAddresses(): IpAddresseCollection
	{
		return $this->client->retrieveEntities($this->links['ipAddresses']);
	}


	public function getStoragePools(): StoragePoolCollection
	{
		return $this->client->retrieveEntities($this->links['storagePools']);
	}


	public function getConfigItemStatuses(): ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getClusters(): ClusterCollection
	{
		return $this->client->retrieveEntities($this->links['clusters']);
	}


	public function getContainerEvents(): ContainerEventCollection
	{
		return $this->client->retrieveEntities($this->links['containerEvents']);
	}

}
