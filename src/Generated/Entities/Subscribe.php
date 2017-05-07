<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class Subscribe extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['eventNames'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $eventNames = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/subscribe',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/subscribe',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $eventNames)
	{
		$result = new static();
		$result->eventNames = $eventNames;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getEventNames(): array
	{
		return $this->eventNames;
	}

}
