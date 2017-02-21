<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Host extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[agent]
	 */
	public $agentId;

	/** @var string */
	public $agentState;

	/** @var int */
	public $computeTotal;

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

	/** @var int */
	public $localStorageMb;

	/** @var int */
	public $memory;

	/** @var int */
	public $milliCpu;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[physicalHost]
	 */
	public $physicalHostId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

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

	/** @var json */
	public $info;

	/** @var string */
	public $hostname;

	/** @var string */
	public $apiProxy;

	/** @var string */
	public $agentIpAddress;

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var StringMap */
	public $labels = [];

	/** @var publicEndpoint[] */
	public $publicEndpoints = [];

	/** @var amazonec2Config */
	public $amazonec2Config;

	/** @var string */
	public $authCertificateAuthority;

	/** @var string */
	public $authKey;

	/** @var azureConfig */
	public $azureConfig;

	/** @var digitaloceanConfig */
	public $digitaloceanConfig;

	/** @var string */
	public $dockerVersion;

	/** @var string */
	public $driver;

	/** @var StringMap */
	public $engineEnv = [];

	/** @var string[] */
	public $engineInsecureRegistry = [];

	/** @var string */
	public $engineInstallUrl;

	/** @var StringMap */
	public $engineLabel = [];

	/** @var StringMap */
	public $engineOpt = [];

	/** @var string[] */
	public $engineRegistryMirror = [];

	/** @var string */
	public $engineStorageDriver;

	/** @var genericConfig */
	public $genericConfig;

	/** @var packetConfig */
	public $packetConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/host',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/hosts',
	];


	public function getAccount(): Account
	{
	}


	public function getAgent(): Agent
	{
	}


	public function getPhysicalHost(): PhysicalHost
	{
	}

}
