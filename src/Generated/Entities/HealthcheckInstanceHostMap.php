<?php
namespace SamIT\Rancher\Generated\Entities;

class HealthcheckInstanceHostMap extends \SamIT\Rancher\Types\Entity
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

	/** @var string */
	public $healthState;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/healthcheckinstancehostmap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/healthcheckinstancehostmaps',
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
