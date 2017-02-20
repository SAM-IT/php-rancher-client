<?php
namespace SamIT\Rancher\Generated\Entities;

class Amazonec2Config extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $accessKey;

	/** @var string */
	public $ami;

	/** @var string */
	public $blockDurationMinutes;

	/** @var string */
	public $deviceName;

	/** @var string */
	public $endpoint;

	/** @var string */
	public $iamInstanceProfile;

	/** @var boolean */
	public $insecureTransport;

	/** @var string */
	public $instanceType;

	/** @var string */
	public $keypairName;

	/** @var boolean */
	public $monitoring;

	/** @var string[] */
	public $openPort = [];

	/** @var boolean */
	public $privateAddressOnly;

	/** @var string */
	public $region;

	/** @var boolean */
	public $requestSpotInstance;

	/** @var string */
	public $retries;

	/** @var string */
	public $rootSize;

	/** @var string */
	public $secretKey;

	/** @var string[] */
	public $securityGroup = [];

	/** @var string */
	public $sessionToken;

	/** @var string */
	public $spotPrice;

	/** @var string */
	public $sshKeypath;

	/** @var string */
	public $sshUser;

	/** @var string */
	public $subnetId;

	/** @var string */
	public $tags;

	/** @var boolean */
	public $useEbsOptimizedInstance;

	/** @var boolean */
	public $usePrivateAddress;

	/** @var string */
	public $userdata;

	/** @var string */
	public $volumeType;

	/** @var string */
	public $vpcId;

	/** @var string */
	public $zone;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/amazonec2config'];

}
