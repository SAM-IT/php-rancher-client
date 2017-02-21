<?php
namespace SamIT\Rancher\Generated\Entities;

class AddRemoveServiceLinkInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['serviceLink'];

	/** @var serviceLink */
	public $serviceLink;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/addremoveservicelinkinput',
	];

}
