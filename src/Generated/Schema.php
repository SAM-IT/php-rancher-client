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

	/** @var JsonMap */
	public $collectionActions = [];

	/** @var JsonMap */
	public $collectionFields = [];

	/** @var JsonMap */
	public $collectionFilters = [];

	/** @var string[] */
	public $collectionMethods = [];

	/** @var string[] */
	public $includeableLinks = [];

	/** @var string */
	public $pluralName;

	/** @var JsonMap */
	public $resourceActions = [];

	/** @var JsonMap */
	public $resourceFields = [];

	/** @var string[] */
	public $resourceMethods = [];

}
