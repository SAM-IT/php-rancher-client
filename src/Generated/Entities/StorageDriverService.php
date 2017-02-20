<?php
namespace SamIT\Rancher\Generated\Entities;

class StorageDriverService extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var boolean */
	public $assignServiceIpAddress;

	/** @var int */
	public $createIndex;

	/** @var date */
	public $created;

	/** @var int */
	public $currentScale;

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

	/** @var lbTargetConfig */
	public $lbConfig;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var JsonMap */
	public $metadata = [];

	/** @var string */
	public $name;

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var boolean */
	public $retainIp;

	/** @var int */
	public $scale;

	/** @var scalePolicy */
	public $scalePolicy;

	/** @var secondaryLaunchConfig[] */
	public $secondaryLaunchConfigs = [];

	/** @var string */
	public $selectorContainer;

	/** @var string */
	public $selectorLink;

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

	/** @var string */
	public $vip;

	/** @var storageDriver */
	public $storageDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagedriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagedriverservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
