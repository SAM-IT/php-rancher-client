<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class GenericConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['enginePort', 'ipAddress', 'sshKey', 'sshPort', 'sshUser'];

	/**
	 * Docker engine port
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $enginePort;

	/**
	 * IP Address of machine
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $ipAddress;

	/**
	 * SSH private key path (if not provided, default SSH key will be used)
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshKey;

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
	 * SSH user
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $sshUser;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/genericconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $enginePort, string $ipAddress, string $sshKey, string $sshPort, string $sshUser)
	{
		$result = new static();
		$result->enginePort = $enginePort;
		$result->ipAddress = $ipAddress;
		$result->sshKey = $sshKey;
		$result->sshPort = $sshPort;
		$result->sshUser = $sshUser;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getEnginePort(): string
	{
		return $this->enginePort;
	}


	/**
	 * @simple-getter
	 */
	public function getIpAddress(): string
	{
		return $this->ipAddress;
	}


	/**
	 * @simple-getter
	 */
	public function getSshKey(): string
	{
		return $this->sshKey;
	}


	/**
	 * @simple-getter
	 */
	public function getSshPort(): string
	{
		return $this->sshPort;
	}


	/**
	 * @simple-getter
	 */
	public function getSshUser(): string
	{
		return $this->sshUser;
	}

}
