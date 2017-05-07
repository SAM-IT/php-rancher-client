<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class Binding extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['services'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[serviceBinding]
	 * @var ServiceBindingMap
	 */
	protected $services = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/binding'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\ServiceBindingMap $services)
	{
		$result = new static();
		$result->services = $services;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return ServiceBindingMap
	 */
	public function getServices(): SamIT\Rancher\Generated\Entities\ServiceBindingMap
	{
		return $this->services;
	}

}
