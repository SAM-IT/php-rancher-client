<?php
namespace SamIT\Rancher\Generated;

class Schema extends \SamIT\Rancher\Schema
{
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


	public function generateClass(string $namespace, \SamIT\Rancher\Types\EnumGenerator $enumGenerator, string $directory): \Nette\PhpGenerator\ClassType
	{
		return parent::generateClass($namespace, $enumGenerator, $directory);
	}

}
