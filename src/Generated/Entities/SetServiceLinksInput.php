<?php
namespace SamIT\Rancher\Generated\Entities;

class SetServiceLinksInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['serviceLinks'];

	/** @var serviceLink[] */
	public $serviceLinks = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/setservicelinksinput',
	];

}
