<?php
namespace SamIT\Rancher\Generated\Entities;

class Machine extends \SamIT\Rancher\Types\Entity
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
	public $driver;

	/** @var string */
	public $externalId;

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

	/** @var StringMap */
	public $labels = [];

	/** @var packetConfig */
	public $packetConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/machine',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/machines',
	];


	public function getAccount(): Account
	{
	}

}
