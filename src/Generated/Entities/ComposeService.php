<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ComposeService extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
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
		'linkedServices',
		'name',
		'publicEndpoints',
		'removeTime',
		'removed',
		'scale',
		'scalePolicy',
		'selectorContainer',
		'selectorLink',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'vip',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

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

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var string */
	public $name;

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var int */
	public $scale;

	/** @var scalePolicy */
	public $scalePolicy;

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

	/** @var string */
	public $uuid;

	/** @var string */
	public $vip;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/composeservices',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getStack(): \SamIT\Rancher\Generated\Collections\StacCollection
	{
		return $this->client->retrieveEntities($this->links['stack']);
	}


	public function getConsumedbyservices(): \SamIT\Rancher\Generated\Collections\ConsumedbyserviceCollection
	{
		return $this->client->retrieveEntities($this->links['consumedbyservices']);
	}


	public function getInstances(): \SamIT\Rancher\Generated\Collections\InstanceCollection
	{
		return $this->client->retrieveEntities($this->links['instances']);
	}


	public function getStorageDrivers(): \SamIT\Rancher\Generated\Collections\StorageDriverCollection
	{
		return $this->client->retrieveEntities($this->links['storageDrivers']);
	}


	public function getConsumedservices(): \SamIT\Rancher\Generated\Collections\ConsumedserviceCollection
	{
		return $this->client->retrieveEntities($this->links['consumedservices']);
	}


	public function getConfigItemStatuses(): \SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getServiceExposeMaps(): \SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection
	{
		return $this->client->retrieveEntities($this->links['serviceExposeMaps']);
	}


	public function getNetworkDrivers(): \SamIT\Rancher\Generated\Collections\NetworkDriverCollection
	{
		return $this->client->retrieveEntities($this->links['networkDrivers']);
	}


	public function getServiceLogs(): \SamIT\Rancher\Generated\Collections\ServiceLogCollection
	{
		return $this->client->retrieveEntities($this->links['serviceLogs']);
	}

}
