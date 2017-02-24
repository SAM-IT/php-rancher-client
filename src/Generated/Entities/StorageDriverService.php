<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection;
use SamIT\Rancher\Generated\Collections\ConsumedbyserviceCollection;
use SamIT\Rancher\Generated\Collections\ConsumedserviceCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\NetworkDriverCollection;
use SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceLogCollection;
use SamIT\Rancher\Generated\Collections\StacCollection;
use SamIT\Rancher\Generated\Collections\StorageDriverCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class StorageDriverService extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'assignServiceIpAddress',
		'createIndex',
		'created',
		'currentScale',
		'data',
		'description',
		'externalId',
		'fqdn',
		'healthState',
		'id',
		'instanceIds',
		'kind',
		'launchConfig',
		'lbConfig',
		'linkedServices',
		'metadata',
		'name',
		'publicEndpoints',
		'removeTime',
		'removed',
		'retainIp',
		'scale',
		'scalePolicy',
		'secondaryLaunchConfigs',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'upgrade',
		'uuid',
		'vip',
		'storageDriver',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var boolean */
	public $assignServiceIpAddress;

	/** @var int */
	public $createIndex;

	/** @var date */
	public $created;

	/** @var int */
	public $currentScale;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var string */
	public $fqdn;

	/** @var string */
	public $healthState;

	/** @var int */
	public $id;

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var string */
	public $kind;

	/** @var launchConfig */
	public $launchConfig;

	/** @var lbTargetConfig */
	public $lbConfig;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $name;

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var boolean */
	public $retainIp;

	/** @var int */
	public $scale;

	/** @var scalePolicy */
	public $scalePolicy;

	/** @var secondaryLaunchConfig[] */
	public $secondaryLaunchConfigs = [];

	/** @var string */
	public $selectorContainer;

	/** @var string */
	public $selectorLink;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var boolean */
	public $startOnCreate;

	/** @var StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var serviceUpgrade */
	public $upgrade;

	/** @var string */
	public $uuid;

	/** @var string */
	public $vip;

	/** @var storageDriver */
	public $storageDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagedriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagedriverservices',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getStack(): StacCollection
	{
		return $this->client->retrieveEntities($this->links['stack']);
	}


	public function getConsumedbyservices(): ConsumedbyserviceCollection
	{
		return $this->client->retrieveEntities($this->links['consumedbyservices']);
	}


	public function getInstances(): InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getStorageDrivers(): StorageDriverCollection
	{
		return $this->client->retrieveEntities($this->links['storageDrivers']);
	}


	public function getConsumedservices(): ConsumedserviceCollection
	{
		return $this->client->retrieveEntities($this->links['consumedservices']);
	}


	public function getConfigItemStatuses(): ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getServiceExposeMaps(): ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getNetworkDrivers(): NetworkDriverCollection
	{
		return $this->client->retrieveEntities($this->links['networkDrivers']);
	}


	public function getServiceLogs(): ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}

}
