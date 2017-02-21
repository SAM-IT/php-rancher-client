<?php
namespace SamIT\Rancher\Generated\Entities;

class ComposeConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['dockerComposeConfig', 'rancherComposeConfig'];

	/** @var string */
	public $dockerComposeConfig;

	/** @var string */
	public $rancherComposeConfig;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeconfig'];

}
