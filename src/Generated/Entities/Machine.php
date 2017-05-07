<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Types\StringMap;

class Machine extends PhysicalHost
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'driver',
		'externalId',
		'id',
		'kind',
		'name',
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

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type amazonec2Config
	 * @var Amazonec2Config
	 */
	protected $amazonec2Config;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $authCertificateAuthority;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $authKey;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type azureConfig
	 * @var AzureConfig
	 */
	protected $azureConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type digitaloceanConfig
	 * @var DigitaloceanConfig
	 */
	protected $digitaloceanConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $dockerVersion;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $engineEnv = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $engineInsecureRegistry = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $engineInstallUrl;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $engineLabel = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $engineOpt = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $engineRegistryMirror = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $engineStorageDriver;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type genericConfig
	 * @var GenericConfig
	 */
	protected $genericConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $labels = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type packetConfig
	 * @var PacketConfig
	 */
	protected $packetConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/machine',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/machines',
	];


	/**
	 * @simple-getter
	 * @api-type amazonec2Config
	 * @return Amazonec2Config
	 */
	public function getAmazonec2Config(): ?Amazonec2Config
	{
		return $this->amazonec2Config;
	}


	public function setAmazonec2Config(Amazonec2Config $value = NULL)
	{
		$this->amazonec2Config = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAuthCertificateAuthority(): ?string
	{
		return $this->authCertificateAuthority;
	}


	public function setAuthCertificateAuthority(string $value = NULL)
	{
		$this->authCertificateAuthority = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAuthKey(): ?string
	{
		return $this->authKey;
	}


	public function setAuthKey(string $value = NULL)
	{
		$this->authKey = $value;
	}


	/**
	 * @simple-getter
	 * @api-type azureConfig
	 * @return AzureConfig
	 */
	public function getAzureConfig(): ?AzureConfig
	{
		return $this->azureConfig;
	}


	public function setAzureConfig(AzureConfig $value = NULL)
	{
		$this->azureConfig = $value;
	}


	/**
	 * @simple-getter
	 * @api-type digitaloceanConfig
	 * @return DigitaloceanConfig
	 */
	public function getDigitaloceanConfig(): ?DigitaloceanConfig
	{
		return $this->digitaloceanConfig;
	}


	public function setDigitaloceanConfig(DigitaloceanConfig $value = NULL)
	{
		$this->digitaloceanConfig = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDockerVersion(): ?string
	{
		return $this->dockerVersion;
	}


	public function setDockerVersion(string $value = NULL)
	{
		$this->dockerVersion = $value;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getEngineEnv(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->engineEnv;
	}


	public function setEngineEnv(StringMap $value = NULL)
	{
		$this->engineEnv = $value;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getEngineInsecureRegistry(): ?array
	{
		return $this->engineInsecureRegistry;
	}


	public function setEngineInsecureRegistry(array $value = NULL)
	{
		$this->engineInsecureRegistry = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getEngineInstallUrl(): ?string
	{
		return $this->engineInstallUrl;
	}


	public function setEngineInstallUrl(string $value = NULL)
	{
		$this->engineInstallUrl = $value;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getEngineLabel(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->engineLabel;
	}


	public function setEngineLabel(StringMap $value = NULL)
	{
		$this->engineLabel = $value;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getEngineOpt(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->engineOpt;
	}


	public function setEngineOpt(StringMap $value = NULL)
	{
		$this->engineOpt = $value;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getEngineRegistryMirror(): ?array
	{
		return $this->engineRegistryMirror;
	}


	public function setEngineRegistryMirror(array $value = NULL)
	{
		$this->engineRegistryMirror = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getEngineStorageDriver(): ?string
	{
		return $this->engineStorageDriver;
	}


	public function setEngineStorageDriver(string $value = NULL)
	{
		$this->engineStorageDriver = $value;
	}


	/**
	 * @simple-getter
	 * @api-type genericConfig
	 * @return GenericConfig
	 */
	public function getGenericConfig(): ?GenericConfig
	{
		return $this->genericConfig;
	}


	public function setGenericConfig(GenericConfig $value = NULL)
	{
		$this->genericConfig = $value;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getLabels(): ?\SamIT\Rancher\Types\StringMap
	{
		return $this->labels;
	}


	public function setLabels(StringMap $value = NULL)
	{
		$this->labels = $value;
	}


	/**
	 * @simple-getter
	 * @api-type packetConfig
	 * @return PacketConfig
	 */
	public function getPacketConfig(): ?PacketConfig
	{
		return $this->packetConfig;
	}


	public function setPacketConfig(PacketConfig $value = NULL)
	{
		$this->packetConfig = $value;
	}

}
