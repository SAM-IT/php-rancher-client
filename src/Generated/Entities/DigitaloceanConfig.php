<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class DigitaloceanConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accessToken',
		'backups',
		'image',
		'ipv6',
		'privateNetworking',
		'region',
		'size',
		'sshKeyFingerprint',
		'sshKeyPath',
		'sshPort',
		'sshUser',
		'userdata',
	];

	/**
	 * Digital Ocean access token
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $accessToken;

	/**
	 * enable backups for droplet
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $backups;

	/**
	 * Digital Ocean Image
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $image;

	/**
	 * enable ipv6 for droplet
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $ipv6;

	/**
	 * enable private networking for droplet
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $privateNetworking;

	/**
	 * Digital Ocean region
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $region;

	/**
	 * Digital Ocean size
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $size;

	/**
	 * SSH key fingerprint
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshKeyFingerprint;

	/**
	 * SSH private key path
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshKeyPath;

	/**
	 * SSH port
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshPort;

	/**
	 * SSH username
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshUser;

	/**
	 * path to file with cloud-init user-data
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $userdata;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/digitaloceanconfig',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $accessToken, \boolean $backups, string $image, \boolean $ipv6, \boolean $privateNetworking, string $region, string $size, string $sshKeyFingerprint, string $sshKeyPath, string $sshPort, string $sshUser, string $userdata)
	{
		$result = new static();
		$result->accessToken = $accessToken;
		$result->backups = $backups;
		$result->image = $image;
		$result->ipv6 = $ipv6;
		$result->privateNetworking = $privateNetworking;
		$result->region = $region;
		$result->size = $size;
		$result->sshKeyFingerprint = $sshKeyFingerprint;
		$result->sshKeyPath = $sshKeyPath;
		$result->sshPort = $sshPort;
		$result->sshUser = $sshUser;
		$result->userdata = $userdata;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAccessToken(): string
	{
		return $this->accessToken;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getBackups(): \boolean
	{
		return $this->backups;
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
	 * @api-type boolean
	 */
	public function getIpv6(): \boolean
	{
		return $this->ipv6;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getPrivateNetworking(): \boolean
	{
		return $this->privateNetworking;
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
	public function getSshKeyFingerprint(): string
	{
		return $this->sshKeyFingerprint;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSshKeyPath(): string
	{
		return $this->sshKeyPath;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSshPort(): string
	{
		return $this->sshPort;
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
	public function getUserdata(): string
	{
		return $this->userdata;
	}

}
