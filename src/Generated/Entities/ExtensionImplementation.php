<?php
namespace SamIT\Rancher\Generated\Entities;

class ExtensionImplementation extends \SamIT\Rancher\Types\Entity
{
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
