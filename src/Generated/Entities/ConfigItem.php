<?php
namespace SamIT\Rancher\Generated\Entities;

class ConfigItem extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string */
	public $sourceVersion;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/configitem',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/configitems',
	];

}
