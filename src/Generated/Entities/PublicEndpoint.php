<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class PublicEndpoint extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['hostId', 'instanceId', 'ipAddress', 'port', 'serviceId'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[host]
	 * @var string
	 */
	protected $hostId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[instance]
	 * @var string
	 */
	protected $instanceId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $ipAddress;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $port;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[service]
	 * @var string
	 */
	protected $serviceId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/publicendpoint'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\Host $hostId, \Instance $instanceId, string $ipAddress, \Service $serviceId)
	{
		$result = new static();
		$result->hostId = $hostId;
		$result->instanceId = $instanceId;
		$result->ipAddress = $ipAddress;
		$result->serviceId = $serviceId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[host]
	 * @return string
	 */
	public function getHostId(): string
	{
		return $this->hostId;
	}


	/**
	 * --> getter from reference: reference[host]
	 */
	public function getHost(): ?Host
	{
		return $this->client()->getHost($this->hostId);
	}


	/**
	 * @simple-getter
	 * @api-type reference[instance]
	 * @return string
	 */
	public function getInstanceId(): string
	{
		return $this->instanceId;
	}


	/**
	 * --> getter from reference: reference[instance]
	 */
	public function getInstance(): ?Instance
	{
		return $this->client()->getInstance($this->instanceId);
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIpAddress(): string
	{
		return $this->ipAddress;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getPort(): ?int
	{
		return $this->port;
	}


	/**
	 * @simple-getter
	 * @api-type reference[service]
	 * @return string
	 */
	public function getServiceId(): string
	{
		return $this->serviceId;
	}


	/**
	 * --> getter from reference: reference[service]
	 */
	public function getService(): ?Service
	{
		return $this->client()->getService($this->serviceId);
	}

}
