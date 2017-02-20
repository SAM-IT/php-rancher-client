<?php
namespace SamIT\Rancher\Generated\Entities;

class PublicEndpoint extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $ipAddress;

	/** @var int */
	public $port;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/publicendpoint'];


	public function getHost(): Host
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getService(): Service
	{
	}

}
