<?php
namespace SamIT\Rancher\Generated\Entities;

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

	/** @var string */
	public $backendName;

	/** @var string */
	public $hostname;

	/** @var string */
	public $path;

	/** @var int */
	public $priority;

	/** @var ProtocolEnum */
	public $protocol;

	/** @var string */
	public $selector;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var int */
	public $sourcePort;

	/** @var int */
	public $targetPort;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/portrule'];


	public function getService(): Service
	{
	}

}
