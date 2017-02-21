<?php
namespace SamIT\Rancher\Generated\Entities;

class ExtensionImplementation extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['className', 'name', 'properties'];

	/** @var string */
	public $className;

	/** @var string */
	public $name;

	/** @var StringMap */
	public $properties = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/extensionimplementation',
	];

}
