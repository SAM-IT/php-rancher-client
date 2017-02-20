<?php
namespace SamIT\Rancher\Generated\Entities;

class TypeDocumentation extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $description;

	/** @var string */
	public $id;

	/** @var FieldDocumentationMap */
	public $resourceFields = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/typedocumentation',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/typedocumentations',
	];

}
