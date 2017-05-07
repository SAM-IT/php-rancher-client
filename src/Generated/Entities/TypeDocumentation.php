<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Maps\FieldDocumentationMap;

class TypeDocumentation extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['description', 'id', 'resourceFields'];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $description;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type map[fieldDocumentation]
	 * @var FieldDocumentationMap
	 */
	protected $resourceFields = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/typedocumentation',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/typedocumentations',
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


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getId(): string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 * @api-type map[fieldDocumentation]
	 * @return FieldDocumentationMap
	 */
	public function getResourceFields(): \SamIT\Rancher\Generated\Maps\FieldDocumentationMap
	{
		return $this->resourceFields;
	}

}
