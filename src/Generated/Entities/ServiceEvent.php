<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ServiceEvent extends \SamIT\Rancher\Types\Entity
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
	public $externalTimestamp;

	/** @var string */
	public $healthcheckUuid;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

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

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var string */
	public $reportedHealth;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceevent',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceevents',
	];


	public function getAccount(): Account
	{
	}


	public function getHost(): Host
	{
	}


	public function getInstance(): Instance
	{
	}

}
