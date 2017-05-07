<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class FieldDocumentation extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['description'];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $description;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/fielddocumentation',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $description)
	{
		$result = new static();
		$result->description = $description;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}


	public function setDescription(string $value)
	{
		$this->description = $value;
	}

}
