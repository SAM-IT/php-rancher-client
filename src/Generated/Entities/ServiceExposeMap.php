<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ServiceExposeMap extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'id',
		'instanceId',
		'ipAddress',
		'kind',
		'managed',
		'name',
		'removeTime',
		'removed',
		'serviceId',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
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

	/** @var int */
	public $id;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $ipAddress;

	/** @var string */
	public $kind;

	/** @var boolean */
	public $managed;

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
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceexposemap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceexposemaps',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getInstance(): \SamIT\Rancher\Generated\Collections\InstancCollection
	{
		return $this->client->retrieveEntities($this->links['instance']);
	}


	public function getService(): \SamIT\Rancher\Generated\Collections\ServicCollection
	{
		return $this->client->retrieveEntities($this->links['service']);
	}

}
