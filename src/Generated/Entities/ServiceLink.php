<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ServiceLink extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['name', 'serviceId', 'uuid'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[service]
	 * @var string
	 */
	protected $serviceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicelink'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\Service $serviceId)
	{
		$result = new static();
		$result->serviceId = $serviceId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getName(): ?string
	{
		return $this->name;
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


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUuid(): string
	{
		return $this->uuid;
	}

}
