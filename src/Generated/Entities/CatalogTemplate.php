<?php
namespace SamIT\Rancher\Generated\Entities;

class CatalogTemplate extends \SamIT\Rancher\Types\Entity
{
	/** @var JsonMap */
	public $answers = [];

	/** @var binding */
	public $binding;

	/** @var string */
	public $description;

	/** @var string */
	public $dockerCompose;

	/** @var string */
	public $name;

	/** @var string */
	public $rancherCompose;

	/** @var string */
	public $templateId;

	/** @var string */
	public $templateVersionId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/catalogtemplate'];

}
