<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class HealthcheckInstanceHostMap extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'healthState',
		'hostId',
		'id',
		'instanceId',
		'kind',
		'name',
		'removeTime',
		'removed',
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

	/** @var string */
	public $healthState;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var int */
	public $id;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

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

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/healthcheckinstancehostmap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/healthcheckinstancehostmaps',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getHost(): \SamIT\Rancher\Generated\Collections\HosCollection
	{
		return $this->client->retrieveEntities($this->links['host']);
	}


	public function getInstance(): \SamIT\Rancher\Generated\Collections\InstancCollection
	{
		return $this->client->retrieveEntities($this->links['instance']);
	}

}
