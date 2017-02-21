<?php
namespace SamIT\Rancher\Generated\Entities;

class ExternalHandlerProcessConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['name', 'onError'];

	/** @var string */
	public $name;

	/** @var string */
	public $onError;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalhandlerprocessconfig',
	];

}
