<?php
namespace SamIT\Rancher\Generated\Entities;

class ToServiceUpgradeStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $batchSize;

	/** @var int */
	public $finalScale;

	/** @var int */
	public $intervalMillis;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $toServiceId;

	/** @var boolean */
	public $updateLinks;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/toserviceupgradestrategy',
	];


	public function getToService(): ToService
	{
	}

}
