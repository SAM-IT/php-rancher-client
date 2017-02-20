<?php
namespace SamIT\Rancher\Generated\Entities;

class ServicesPortRange extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $endPort;

	/** @var int */
	public $startPort;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicesportrange',
	];

}
