<?php
namespace SamIT\Rancher\Generated\Entities;

class Subnet extends \SamIT\Rancher\Types\Entity
{
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

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
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


	public function getAccount(): Account
	{
	}


	public function getNetwork(): Network
	{
	}

}
