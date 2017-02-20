<?php
namespace SamIT\Rancher\Generated\Entities;

class ExtensionPoint extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $excludeSetting;

	/** @var extensionImplementation[] */
	public $implementations = [];

	/** @var string */
	public $includeSetting;

	/** @var string */
	public $listSetting;

	/** @var string */
	public $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/extensionpoint',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/extensionpoints',
	];

}
