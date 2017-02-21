<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Network extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'id',
		'kind',
		'name',
		'networkDriverId',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'dns',
		'dnsSearch',
		'metadata',
		'subnets',
		'hostPorts',
		'defaultPolicyAction',
		'policy',
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

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[networkDriver]
	 */
	public $networkDriverId;

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
	public $dns = [];

	/** @var string[] */
	public $dnsSearch = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var subnet[] */
	public $subnets = [];

	/** @var boolean */
	public $hostPorts;

	/** @var DefaultPolicyActionEnum */
	public $defaultPolicyAction;

	/** @var networkPolicyRule[] */
	public $policy = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/network',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/networks',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getNetworkDriver(): \SamIT\Rancher\Generated\Collections\NetworkDriveCollection
	{
		return $this->client->retrieveEntities($this->links['networkDriver']);
	}


	public function getIpAddresses(): \SamIT\Rancher\Generated\Collections\IpAddresseCollection
	{
		return $this->client->retrieveEntities($this->links['ipAddresses']);
	}


	public function getSubnets(): \SamIT\Rancher\Generated\Collections\SubnetCollection
	{
		return $this->client->retrieveEntities($this->links['subnets']);
	}

}
