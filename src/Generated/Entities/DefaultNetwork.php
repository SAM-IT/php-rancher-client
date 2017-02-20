<?php
namespace SamIT\Rancher\Generated\Entities;

class DefaultNetwork extends \SamIT\Rancher\Types\Entity
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

	/** @var \SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum */
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

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var subnet[] */
	public $subnets = [];

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/defaultnetwork'];


	public function getAccount(): Account
	{
	}

}
