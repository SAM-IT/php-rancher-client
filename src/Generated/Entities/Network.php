<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Network extends \SamIT\Rancher\Types\Entity
{
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


	public function getAccount(): Account
	{
	}


	public function getNetworkDriver(): NetworkDriver
	{
	}

}
