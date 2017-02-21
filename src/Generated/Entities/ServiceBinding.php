<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceBinding extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['labels', 'ports'];

	/** @var StringMap */
	public $labels = [];

	/** @var string[] */
	public $ports = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicebinding'];

}
