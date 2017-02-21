<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class NetworkDriverService extends Service
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
		'networkDriver',
	];

	/** @var networkDriver */
	public $networkDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkdriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/networkdriverservices',
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
