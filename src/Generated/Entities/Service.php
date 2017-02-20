<?php
namespace SamIT\Rancher\Generated\Entities;

class Service extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var int */
	public $createIndex;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var string */
	public $healthState;

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

	/** @var string */
	public $selectorContainer;

	/** @var string */
	public $selectorLink;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var string */
	public $uuid;

	/** @var string */
	public $vip;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var int */
	public $scale;

	/** @var int */
	public $currentScale;

	/** @var scalePolicy */
	public $scalePolicy;

	/** @var launchConfig */
	public $launchConfig;

	/** @var serviceUpgrade */
	public $upgrade;

	/** @var secondaryLaunchConfig[] */
	public $secondaryLaunchConfigs = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $fqdn;

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var boolean */
	public $retainIp;

	/** @var boolean */
	public $assignServiceIpAddress;

	/** @var boolean */
	public $startOnCreate;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var lbTargetConfig */
	public $lbConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/service',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/services',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
