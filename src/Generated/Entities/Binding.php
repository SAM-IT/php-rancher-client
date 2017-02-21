<?php
namespace SamIT\Rancher\Generated\Entities;

class Binding extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['services'];

	/** @var ServiceBindingMap */
	public $services = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/binding'];

}
