<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ComposeConfigInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['serviceIds'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[reference[service]]
	 * @var string[][]
	 */
	protected $serviceIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeconfiginput',
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
	 * @api-type array[reference[service]]
	 * @return string[][]
	 */
	public function getServiceIds(): ?array
	{
		return $this->serviceIds;
	}

}
