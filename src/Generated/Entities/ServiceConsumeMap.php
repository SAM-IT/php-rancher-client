<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ServiceConsumeMap extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $consumedServiceId;

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

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

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
	public $ports = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceconsumemap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceconsumemaps',
	];


	public function getAccount(): Account
	{
	}


	public function getConsumedService(): ConsumedService
	{
	}


	public function getService(): Service
	{
	}

}
