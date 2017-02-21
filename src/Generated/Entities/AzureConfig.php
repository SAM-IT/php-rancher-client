<?php
namespace SamIT\Rancher\Generated\Entities;

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

	/** @var string */
	public $availabilitySet;

	/** @var string */
	public $clientId;

	/** @var string */
	public $clientSecret;

	/** @var string */
	public $customData;

	/** @var string */
	public $dns;

	/** @var string */
	public $dockerPort;

	/** @var string */
	public $environment;

	/** @var string */
	public $image;

	/** @var string */
	public $location;

	/** @var boolean */
	public $noPublicIp;

	/** @var string[] */
	public $openPort = [];

	/** @var string */
	public $privateIpAddress;

	/** @var string */
	public $resourceGroup;

	/** @var string */
	public $size;

	/** @var string */
	public $sshUser;

	/** @var boolean */
	public $staticPublicIp;

	/** @var string */
	public $storageType;

	/** @var string */
	public $subnet;

	/** @var string */
	public $subnetPrefix;

	/** @var string */
	public $subscriptionId;

	/** @var boolean */
	public $usePrivateIp;

	/** @var string */
	public $vnet;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/azureconfig'];

}
