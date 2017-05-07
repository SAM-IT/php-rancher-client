<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class AzureConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'availabilitySet',
		'clientId',
		'clientSecret',
		'customData',
		'dns',
		'dockerPort',
		'environment',
		'image',
		'location',
		'noPublicIp',
		'openPort',
		'privateIpAddress',
		'resourceGroup',
		'size',
		'sshUser',
		'staticPublicIp',
		'storageType',
		'subnet',
		'subnetPrefix',
		'subscriptionId',
		'usePrivateIp',
		'vnet',
	];

	/**
	 * Azure Availability Set to place the virtual machine into
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $availabilitySet;

	/**
	 * Azure Service Principal Account ID (optional, browser auth is used if not specified)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $clientId;

	/**
	 * Azure Service Principal Account password (optional, browser auth is used if not specified)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $clientSecret;

	/**
	 * Path to file with custom-data
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $customData;

	/**
	 * A unique DNS label for the public IP adddress
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $dns;

	/**
	 * Port number for Docker engine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $dockerPort;

	/**
	 * Azure environment (e.g. AzurePublicCloud, AzureChinaCloud)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $environment;

	/**
	 * Azure virtual machine OS image
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $image;

	/**
	 * Azure region to create the virtual machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $location;

	/**
	 * Do not create a public IP address for the machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $noPublicIp;

	/**
	 * Make the specified port number accessible from the Internet
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $openPort = [];

	/**
	 * Specify a static private IP address for the machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $privateIpAddress;

	/**
	 * Azure Resource Group name (will be created if missing)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $resourceGroup;

	/**
	 * Size for Azure Virtual Machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $size;

	/**
	 * Username for SSH login
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshUser;

	/**
	 * Assign a static public IP address to the machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $staticPublicIp;

	/**
	 * Type of Storage Account to host the OS Disk for the machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $storageType;

	/**
	 * Azure Subnet Name to be used within the Virtual Network
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $subnet;

	/**
	 * Private CIDR block to be used for the new subnet, should comply RFC 1918
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $subnetPrefix;

	/**
	 * Azure Subscription ID
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $subscriptionId;

	/**
	 * Use private IP address of the machine to connect
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $usePrivateIp;

	/**
	 * Azure Virtual Network name to connect the virtual machine (in [resourcegroup:]name format)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $vnet;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/azureconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $availabilitySet, string $clientId, string $clientSecret, string $customData, string $dns, string $dockerPort, string $environment, string $image, string $location, \boolean $noPublicIp, array $openPort, string $privateIpAddress, string $resourceGroup, string $size, string $sshUser, \boolean $staticPublicIp, string $storageType, string $subnet, string $subnetPrefix, string $subscriptionId, \boolean $usePrivateIp, string $vnet)
	{
		$result = new static();
		$result->availabilitySet = $availabilitySet;
		$result->clientId = $clientId;
		$result->clientSecret = $clientSecret;
		$result->customData = $customData;
		$result->dns = $dns;
		$result->dockerPort = $dockerPort;
		$result->environment = $environment;
		$result->image = $image;
		$result->location = $location;
		$result->noPublicIp = $noPublicIp;
		$result->openPort = $openPort;
		$result->privateIpAddress = $privateIpAddress;
		$result->resourceGroup = $resourceGroup;
		$result->size = $size;
		$result->sshUser = $sshUser;
		$result->staticPublicIp = $staticPublicIp;
		$result->storageType = $storageType;
		$result->subnet = $subnet;
		$result->subnetPrefix = $subnetPrefix;
		$result->subscriptionId = $subscriptionId;
		$result->usePrivateIp = $usePrivateIp;
		$result->vnet = $vnet;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAvailabilitySet(): string
	{
		return $this->availabilitySet;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getClientId(): string
	{
		return $this->clientId;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getClientSecret(): string
	{
		return $this->clientSecret;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCustomData(): string
	{
		return $this->customData;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDns(): string
	{
		return $this->dns;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDockerPort(): string
	{
		return $this->dockerPort;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getEnvironment(): string
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getImage(): string
	{
		return $this->image;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getLocation(): string
	{
		return $this->location;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getNoPublicIp(): \boolean
	{
		return $this->noPublicIp;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getOpenPort(): array
	{
		return $this->openPort;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPrivateIpAddress(): string
	{
		return $this->privateIpAddress;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getResourceGroup(): string
	{
		return $this->resourceGroup;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSize(): string
	{
		return $this->size;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSshUser(): string
	{
		return $this->sshUser;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getStaticPublicIp(): \boolean
	{
		return $this->staticPublicIp;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getStorageType(): string
	{
		return $this->storageType;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSubnet(): string
	{
		return $this->subnet;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSubnetPrefix(): string
	{
		return $this->subnetPrefix;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSubscriptionId(): string
	{
		return $this->subscriptionId;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getUsePrivateIp(): \boolean
	{
		return $this->usePrivateIp;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVnet(): string
	{
		return $this->vnet;
	}

}
