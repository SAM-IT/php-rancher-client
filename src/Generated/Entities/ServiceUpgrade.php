<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['inServiceStrategy', 'toServiceStrategy'];

	/** @var inServiceUpgradeStrategy */
	public $inServiceStrategy;

	/** @var toServiceUpgradeStrategy */
	public $toServiceStrategy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceupgrade'];

}
