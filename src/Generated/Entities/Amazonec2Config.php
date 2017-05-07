<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class Amazonec2Config extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accessKey',
		'ami',
		'blockDurationMinutes',
		'deviceName',
		'endpoint',
		'iamInstanceProfile',
		'insecureTransport',
		'instanceType',
		'keypairName',
		'monitoring',
		'openPort',
		'privateAddressOnly',
		'region',
		'requestSpotInstance',
		'retries',
		'rootSize',
		'secretKey',
		'securityGroup',
		'sessionToken',
		'spotPrice',
		'sshKeypath',
		'sshUser',
		'subnetId',
		'tags',
		'useEbsOptimizedInstance',
		'usePrivateAddress',
		'userdata',
		'volumeType',
		'vpcId',
		'zone',
	];

	/**
	 * AWS Access Key
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $accessKey;

	/**
	 * AWS machine image
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $ami;

	/**
	 * AWS spot instance duration in minutes (60, 120, 180, 240, 300, or 360)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $blockDurationMinutes;

	/**
	 * AWS root device name
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $deviceName;

	/**
	 * Optional endpoint URL (hostname only or fully qualified URI)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $endpoint;

	/**
	 * AWS IAM Instance Profile
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $iamInstanceProfile;

	/**
	 * Disable SSL when sending requests
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $insecureTransport;

	/**
	 * AWS instance type
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $instanceType;

	/**
	 * AWS keypair to use; requires --amazonec2-ssh-keypath
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $keypairName;

	/**
	 * Set this flag to enable CloudWatch monitoring
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $monitoring;

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
	 * Only use a private IP address
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $privateAddressOnly;

	/**
	 * AWS region
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $region;

	/**
	 * Set this flag to request spot instance
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $requestSpotInstance;

	/**
	 * Set retry count for recoverable failures (use -1 to disable)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $retries;

	/**
	 * AWS root disk size (in GB)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $rootSize;

	/**
	 * AWS Secret Key
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $secretKey;

	/**
	 * AWS VPC security group
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $securityGroup = [];

	/**
	 * AWS Session Token
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sessionToken;

	/**
	 * AWS spot instance bid price (in dollar)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $spotPrice;

	/**
	 * SSH Key for Instance
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshKeypath;

	/**
	 * Set the name of the ssh user
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshUser;

	/**
	 * AWS VPC subnet id
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $subnetId;

	/**
	 * AWS Tags (e.g. key1,value1,key2,value2)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $tags;

	/**
	 * Create an EBS optimized instance
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $useEbsOptimizedInstance;

	/**
	 * Force the usage of private IP address
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $usePrivateAddress;

	/**
	 * path to file with cloud-init user data
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $userdata;

	/**
	 * Amazon EBS volume type
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $volumeType;

	/**
	 * AWS VPC id
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $vpcId;

	/**
	 * AWS zone for instance (i.e. a,b,c,d,e)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $zone;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/amazonec2config'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $accessKey, string $ami, string $blockDurationMinutes, string $deviceName, string $endpoint, string $iamInstanceProfile, \boolean $insecureTransport, string $instanceType, string $keypairName, \boolean $monitoring, array $openPort, \boolean $privateAddressOnly, string $region, \boolean $requestSpotInstance, string $retries, string $rootSize, string $secretKey, array $securityGroup, string $sessionToken, string $spotPrice, string $sshKeypath, string $sshUser, string $subnetId, string $tags, \boolean $useEbsOptimizedInstance, \boolean $usePrivateAddress, string $userdata, string $volumeType, string $vpcId, string $zone)
	{
		$result = new static();
		$result->accessKey = $accessKey;
		$result->ami = $ami;
		$result->blockDurationMinutes = $blockDurationMinutes;
		$result->deviceName = $deviceName;
		$result->endpoint = $endpoint;
		$result->iamInstanceProfile = $iamInstanceProfile;
		$result->insecureTransport = $insecureTransport;
		$result->instanceType = $instanceType;
		$result->keypairName = $keypairName;
		$result->monitoring = $monitoring;
		$result->openPort = $openPort;
		$result->privateAddressOnly = $privateAddressOnly;
		$result->region = $region;
		$result->requestSpotInstance = $requestSpotInstance;
		$result->retries = $retries;
		$result->rootSize = $rootSize;
		$result->secretKey = $secretKey;
		$result->securityGroup = $securityGroup;
		$result->sessionToken = $sessionToken;
		$result->spotPrice = $spotPrice;
		$result->sshKeypath = $sshKeypath;
		$result->sshUser = $sshUser;
		$result->subnetId = $subnetId;
		$result->tags = $tags;
		$result->useEbsOptimizedInstance = $useEbsOptimizedInstance;
		$result->usePrivateAddress = $usePrivateAddress;
		$result->userdata = $userdata;
		$result->volumeType = $volumeType;
		$result->vpcId = $vpcId;
		$result->zone = $zone;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAccessKey(): string
	{
		return $this->accessKey;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAmi(): string
	{
		return $this->ami;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getBlockDurationMinutes(): string
	{
		return $this->blockDurationMinutes;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDeviceName(): string
	{
		return $this->deviceName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getEndpoint(): string
	{
		return $this->endpoint;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIamInstanceProfile(): string
	{
		return $this->iamInstanceProfile;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getInsecureTransport(): \boolean
	{
		return $this->insecureTransport;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getInstanceType(): string
	{
		return $this->instanceType;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getKeypairName(): string
	{
		return $this->keypairName;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getMonitoring(): \boolean
	{
		return $this->monitoring;
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
	 * @api-type boolean
	 */
	public function getPrivateAddressOnly(): \boolean
	{
		return $this->privateAddressOnly;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRegion(): string
	{
		return $this->region;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getRequestSpotInstance(): \boolean
	{
		return $this->requestSpotInstance;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRetries(): string
	{
		return $this->retries;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getRootSize(): string
	{
		return $this->rootSize;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSecretKey(): string
	{
		return $this->secretKey;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getSecurityGroup(): array
	{
		return $this->securityGroup;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSessionToken(): string
	{
		return $this->sessionToken;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSpotPrice(): string
	{
		return $this->spotPrice;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSshKeypath(): string
	{
		return $this->sshKeypath;
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
	 * @api-type string
	 */
	public function getSubnetId(): string
	{
		return $this->subnetId;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getTags(): string
	{
		return $this->tags;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getUseEbsOptimizedInstance(): \boolean
	{
		return $this->useEbsOptimizedInstance;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getUsePrivateAddress(): \boolean
	{
		return $this->usePrivateAddress;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUserdata(): string
	{
		return $this->userdata;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVolumeType(): string
	{
		return $this->volumeType;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVpcId(): string
	{
		return $this->vpcId;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getZone(): string
	{
		return $this->zone;
	}

}
