<?php
namespace SamIT\Rancher\Generated\Entities;

class FieldDocumentation extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['description'];

	/** @var string */
	public $description;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/fielddocumentation',
	];

}
