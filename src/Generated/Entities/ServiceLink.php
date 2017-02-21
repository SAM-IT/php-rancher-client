<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceLink extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['name', 'serviceId', 'uuid'];

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicelink'];


	public function getService(): Service
	{
	}

}
