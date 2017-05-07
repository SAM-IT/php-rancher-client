<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\ProtocolEnum;

class PortRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'backendName',
		'hostname',
		'path',
		'priority',
		'protocol',
		'selector',
		'serviceId',
		'sourcePort',
		'targetPort',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $backendName;

	/**
	 * @api-update false
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
	 * @api-type string
	 * @var string
	 */
	protected $path;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $priority;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var ProtocolEnum
	 */
	protected $protocol;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $selector;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[service]
	 * @var string
	 */
	protected $serviceId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $sourcePort;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $targetPort;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/portrule'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(ProtocolEnum $protocol)
	{
		$result = new static();
		$result->protocol = $protocol;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getBackendName(): ?string
	{
		return $this->backendName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getHostname(): ?string
	{
		return $this->hostname;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPath(): ?string
	{
		return $this->path;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getPriority(): ?int
	{
		return $this->priority;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return ProtocolEnum
	 */
	public function getProtocol(): ProtocolEnum
	{
		return $this->protocol;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSelector(): ?string
	{
		return $this->selector;
	}


	/**
	 * @simple-getter
	 * @api-type reference[service]
	 * @return string
	 */
	public function getServiceId(): ?string
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


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getSourcePort(): ?int
	{
		return $this->sourcePort;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getTargetPort(): ?int
	{
		return $this->targetPort;
	}

}
