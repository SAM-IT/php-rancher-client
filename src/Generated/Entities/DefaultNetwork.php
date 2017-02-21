<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class DefaultNetwork extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'defaultPolicyAction',
		'description',
		'dns',
		'dnsSearch',
		'hostPorts',
		'id',
		'kind',
		'metadata',
		'name',
		'policy',
		'removeTime',
		'removed',
		'state',
		'subnets',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
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

	/** @var DefaultPolicyActionEnum */
	public $defaultPolicyAction;

	/** @var string */
	public $description;

	/** @var string[] */
	public $dns = [];

	/** @var string[] */
	public $dnsSearch = [];

	/** @var boolean */
	public $hostPorts;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $name;

	/** @var networkPolicyRule[] */
	public $policy = [];

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var subnet[] */
	public $subnets = [];

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/defaultnetwork'];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
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
