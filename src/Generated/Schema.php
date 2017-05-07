<?php
namespace SamIT\Rancher\Generated;

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
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $collectionActions = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $collectionFields = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
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
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $resourceActions = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
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
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionActions(): SamIT\Rancher\Generated\JsonMap
	{
		return $this->collectionActions;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionFields(): SamIT\Rancher\Generated\JsonMap
	{
		return $this->collectionFields;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getCollectionFilters(): SamIT\Rancher\Generated\JsonMap
	{
		return $this->collectionFilters;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getCollectionMethods(): array
	{
		return $this->collectionMethods;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getIncludeableLinks(): array
	{
		return $this->includeableLinks;
	}


	/**
	 * @simple-getter
	 */
	public function getPluralName(): string
	{
		return $this->pluralName;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getResourceActions(): SamIT\Rancher\Generated\JsonMap
	{
		return $this->resourceActions;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getResourceFields(): SamIT\Rancher\Generated\JsonMap
	{
		return $this->resourceFields;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getResourceMethods(): array
	{
		return $this->resourceMethods;
	}

}
