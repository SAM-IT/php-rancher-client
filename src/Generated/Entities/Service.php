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

class Service extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'createIndex',
		'created',
		'data',
		'description',
		'externalId',
		'healthState',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'state',
		'system',
		'uuid',
		'vip',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'scale',
		'currentScale',
		'scalePolicy',
		'launchConfig',
		'upgrade',
		'secondaryLaunchConfigs',
		'metadata',
		'fqdn',
		'publicEndpoints',
		'retainIp',
		'assignServiceIpAddress',
		'startOnCreate',
		'linkedServices',
		'instanceIds',
		'lbConfig',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var int */
	public $createIndex;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var string */
	public $healthState;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var string */
	public $selectorContainer;

	/** @var string */
	public $selectorLink;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var string */
	public $uuid;

	/** @var string */
	public $vip;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var int */
	public $scale;

	/** @var int */
	public $currentScale;

	/** @var scalePolicy */
	public $scalePolicy;

	/** @var launchConfig */
	public $launchConfig;

	/** @var serviceUpgrade */
	public $upgrade;

	/** @var secondaryLaunchConfig[] */
	public $secondaryLaunchConfigs = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $fqdn;

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var boolean */
	public $retainIp;

	/** @var boolean */
	public $assignServiceIpAddress;

	/** @var boolean */
	public $startOnCreate;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var lbTargetConfig */
	public $lbConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/service',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/services',
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
