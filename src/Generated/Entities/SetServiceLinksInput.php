<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class SetServiceLinksInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['serviceLinks'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[serviceLink]
	 * @var ServiceLink[]
	 */
	protected $serviceLinks = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/setservicelinksinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create()
	{
		$result = new static();
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type array[serviceLink]
	 * @return ServiceLink[]
	 */
	public function getServiceLinks(): ?array
	{
		return $this->serviceLinks;
	}

}
