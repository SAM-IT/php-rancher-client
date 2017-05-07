<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Generated\Maps\ServiceMap;
use SamIT\Rancher\Types\JsonMap;

class ExternalService extends Service
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'externalId',
		'fqdn',
		'healthState',
		'id',
		'instanceIds',
		'kind',
		'launchConfig',
		'linkedServices',
		'metadata',
		'name',
		'removed',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'upgrade',
		'uuid',
		'externalIpAddresses',
		'hostname',
		'healthCheck',
	];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $externalIpAddresses = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $hostname;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type instanceHealthCheck
	 * @var InstanceHealthCheck
	 */
	protected $healthCheck;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalservices',
	];


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getExternalIpAddresses(): ?array
	{
		return $this->externalIpAddresses;
	}


	public function setExternalIpAddresses(array $value = NULL)
	{
		$this->externalIpAddresses = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getHostname(): ?string
	{
		return $this->hostname;
	}


	public function setHostname(string $value = NULL)
	{
		$this->hostname = $value;
	}


	/**
	 * @simple-getter
	 * @api-type instanceHealthCheck
	 * @return InstanceHealthCheck
	 */
	public function getHealthCheck(): ?InstanceHealthCheck
	{
		return $this->healthCheck;
	}

}
