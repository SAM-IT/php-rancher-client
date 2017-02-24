<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\CredentialCollection;
use SamIT\Rancher\Generated\Collections\HealthcheckInstanceHostMapCollection;
use SamIT\Rancher\Generated\Collections\HostCollection;
use SamIT\Rancher\Generated\Collections\InstanceCollection;
use SamIT\Rancher\Generated\Collections\InstanceLabelCollection;
use SamIT\Rancher\Generated\Collections\InstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\MountCollection;
use SamIT\Rancher\Generated\Collections\PortCollection;
use SamIT\Rancher\Generated\Collections\ServiceCollection;
use SamIT\Rancher\Generated\Collections\ServiceEventCollection;
use SamIT\Rancher\Generated\Collections\ServiceExposeMapCollection;
use SamIT\Rancher\Generated\Collections\ServiceLogCollection;
use SamIT\Rancher\Generated\Collections\TargetInstanceLinkCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Instance extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'externalId',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'hostId',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

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

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instance',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/instances',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getHost(): Host
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
