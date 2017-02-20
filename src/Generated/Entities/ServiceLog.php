<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceLog extends \SamIT\Rancher\Types\Entity
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

	/** @var date */
	public $endTime;

	/** @var string */
	public $eventType;

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
	public $level;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var boolean */
	public $subLog;

	/** @var string */
	public $transactionId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicelog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/servicelogs',
	];


	public function getAccount(): Account
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getService(): Service
	{
	}

}
