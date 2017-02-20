<?php
namespace SamIT\Rancher\Generated\Entities;

class Schema extends \SamIT\Rancher\Types\Entity
{
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

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/schema',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/schemas',
	];

}
