<?php
namespace SamIT\Rancher\Generated;

use SamIT\Rancher\Types\JsonMap;

class Schema extends \SamIT\Rancher\Schema
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

	/** @var string[] */
	public $links = [];

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
