<?php
namespace SamIT\Rancher\Generated\Entities;

class ComposeConfigInput extends \SamIT\Rancher\Types\Entity
{
	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeconfiginput',
	];

}
