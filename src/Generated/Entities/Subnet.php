<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Subnet extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'cidrSize',
		'created',
		'data',
		'description',
		'endAddress',
		'gateway',
		'id',
		'kind',
		'name',
		'networkAddress',
		'networkId',
		'removeTime',
		'removed',
		'startAddress',
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

	/** @var int */
	public $cidrSize;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $endAddress;

	/** @var string */
	public $gateway;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var string */
	public $networkAddress;

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $networkId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var string */
	public $startAddress;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/subnet',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/subnets',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getNetwork(): \SamIT\Rancher\Generated\Collections\NetworCollection
	{
		return $this->client->retrieveEntities($this->links['network']);
	}


	public function getIpAddresses(): \SamIT\Rancher\Generated\Collections\IpAddresseCollection
	{
		return $this->client->retrieveEntities($this->links['ipAddresses']);
	}

}
