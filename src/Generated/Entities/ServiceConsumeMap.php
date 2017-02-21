<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ServiceConsumeMap extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'consumedServiceId',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'serviceId',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'ports',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $consumedServiceId;

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

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

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

	/** @var string[] */
	public $ports = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceconsumemap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceconsumemaps',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getConsumedService(): \SamIT\Rancher\Generated\Collections\ConsumedServicCollection
	{
		return $this->client->retrieveEntities($this->links['consumedService']);
	}


	public function getService(): \SamIT\Rancher\Generated\Collections\ServicCollection
	{
		return $this->client->retrieveEntities($this->links['service']);
	}


	public function getInstanceLinks(): \SamIT\Rancher\Generated\Collections\InstanceLinkCollection
	{
		return $this->client->retrieveEntities($this->links['instanceLinks']);
	}

}
