<?php
namespace SamIT\Rancher\Generated\Entities;

class ResourceDefinition extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $id;

	/** @var string */
	public $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/resourcedefinition',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/resourcedefinitions',
	];

}