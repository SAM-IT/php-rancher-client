<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Port extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'id',
		'instanceId',
		'kind',
		'name',
		'privateIpAddressId',
		'privatePort',
		'protocol',
		'publicIpAddressId',
		'publicPort',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'bindAddress',
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
	public $kind;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[ipAddress]
	 */
	public $privateIpAddressId;

	/** @var int */
	public $privatePort;

	/** @var string */
	public $protocol;

	/**
	 * @var string
	 * @api-type reference[ipAddress]
	 */
	public $publicIpAddressId;

	/** @var int */
	public $publicPort;

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

	/** @var string */
	public $bindAddress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/port',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/ports',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getInstance(): \SamIT\Rancher\Generated\Collections\InstancCollection
	{
		return $this->client->retrieveEntities($this->links['instance']);
	}


	public function getPrivateIpAddress(): \SamIT\Rancher\Generated\Collections\PrivateIpAddresCollection
	{
		return $this->client->retrieveEntities($this->links['privateIpAddress']);
	}


	public function getPublicIpAddress(): \SamIT\Rancher\Generated\Collections\PublicIpAddresCollection
	{
		return $this->client->retrieveEntities($this->links['publicIpAddress']);
	}

}
