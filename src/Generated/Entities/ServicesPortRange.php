<?php
namespace SamIT\Rancher\Generated\Entities;

class ServicesPortRange extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['endPort', 'startPort'];

	/** @var int */
	public $endPort;

	/** @var int */
	public $startPort;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicesportrange',
	];

}
