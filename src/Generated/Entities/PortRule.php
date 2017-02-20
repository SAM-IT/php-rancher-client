<?php
namespace SamIT\Rancher\Generated\Entities;

class PortRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $backendName;

	/** @var string */
	public $hostname;

	/** @var string */
	public $path;

	/** @var int */
	public $priority;

	/** @var \SamIT\Rancher\Generated\Enums\ProtocolEnum */
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
