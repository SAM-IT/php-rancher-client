<?php
namespace SamIT\Rancher\Generated\Entities;

class Port extends \SamIT\Rancher\Types\Entity
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

	/** @var string */
	public $bindAddress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/port',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/ports',
	];


	public function getAccount(): Account
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getPrivateIpAddress(): PrivateIpAddress
	{
	}


	public function getPublicIpAddress(): PublicIpAddress
	{
	}

}
