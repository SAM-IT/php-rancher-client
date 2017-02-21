<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class IpAddress extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'address',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'name',
		'networkId',
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

	/** @var string */
	public $address;

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

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $networkId;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/ipaddress',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/ipaddresses',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getNetwork(): \SamIT\Rancher\Generated\Collections\NetworCollection
	{
		return $this->client->retrieveEntities($this->links['network']);
	}


	public function getPublicPorts(): \SamIT\Rancher\Generated\Collections\PublicPortCollection
	{
		return $this->client->retrieveEntities($this->links['publicPorts']);
	}


	public function getHosts(): \SamIT\Rancher\Generated\Collections\HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}


	public function getPrivatePorts(): \SamIT\Rancher\Generated\Collections\PrivatePortCollection
	{
		return $this->client->retrieveEntities($this->links['privatePorts']);
	}

}
