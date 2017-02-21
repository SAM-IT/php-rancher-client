<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceUpgradeStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['batchSize', 'intervalMillis'];

	/** @var int */
	public $batchSize;

	/** @var int */
	public $intervalMillis;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceupgradestrategy',
	];

}
