<?php
namespace SamIT\Rancher\Generated\Entities;

class ExternalService extends \SamIT\Rancher\Types\Entity
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
	public $externalId;

	/** @var string */
	public $fqdn;

	/** @var string */
	public $healthState;

	/** @var int */
	public $id;

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var string */
	public $kind;

	/** @var launchConfig */
	public $launchConfig;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var boolean */
	public $startOnCreate;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var serviceUpgrade */
	public $upgrade;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public $externalIpAddresses = [];

	/** @var string */
	public $hostname;

	/** @var instanceHealthCheck */
	public $healthCheck;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
