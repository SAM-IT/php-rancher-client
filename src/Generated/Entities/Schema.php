<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Types\JsonMap;

class Schema extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'collectionActions',
		'collectionFields',
		'collectionFilters',
		'collectionMethods',
		'includeableLinks',
		'pluralName',
		'resourceActions',
		'resourceFields',
		'resourceMethods',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $collectionActions = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $collectionFields = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $collectionFilters = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $collectionMethods = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $includeableLinks = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $pluralName;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $resourceActions = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $resourceFields = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $resourceMethods = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/schema',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/schemas',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(JsonMap $collectionActions, JsonMap $collectionFields, JsonMap $collectionFilters, array $collectionMethods, array $includeableLinks, string $pluralName, JsonMap $resourceActions, JsonMap $resourceFields, array $resourceMethods)
	{
		$result = new static();
		$result->collectionActions = $collectionActions;
		$result->collectionFields = $collectionFields;
		$result->collectionFilters = $collectionFilters;
		$result->collectionMethods = $collectionMethods;
		$result->includeableLinks = $includeableLinks;
		$result->pluralName = $pluralName;
		$result->resourceActions = $resourceActions;
		$result->resourceFields = $resourceFields;
		$result->resourceMethods = $resourceMethods;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionActions(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->collectionActions;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionFields(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->collectionFields;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionFilters(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->collectionFilters;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getCollectionMethods(): array
	{
		return $this->collectionMethods;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getIncludeableLinks(): array
	{
		return $this->includeableLinks;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPluralName(): string
	{
		return $this->pluralName;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getResourceActions(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->resourceActions;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getResourceFields(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->resourceFields;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getResourceMethods(): array
	{
		return $this->resourceMethods;
	}

}
