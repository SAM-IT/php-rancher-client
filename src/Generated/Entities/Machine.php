<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Machine extends PhysicalHost
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'driver',
		'externalId',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'amazonec2Config',
		'authCertificateAuthority',
		'authKey',
		'azureConfig',
		'digitaloceanConfig',
		'dockerVersion',
		'engineEnv',
		'engineInsecureRegistry',
		'engineInstallUrl',
		'engineLabel',
		'engineOpt',
		'engineRegistryMirror',
		'engineStorageDriver',
		'genericConfig',
		'labels',
		'packetConfig',
	];

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


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getHosts(): \SamIT\Rancher\Generated\Collections\HostCollection
	{
		return $this->client->retrieveEntities($this->links['hosts']);
	}

}
