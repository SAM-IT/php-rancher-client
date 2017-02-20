<?php
namespace SamIT\Rancher\Generated\Entities;

class InServiceUpgradeStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $batchSize;

	/** @var int */
	public $intervalMillis;

	/** @var launchConfig */
	public $launchConfig;

	/** @var launchConfig */
	public $previousLaunchConfig;

	/** @var secondaryLaunchConfig[] */
	public $previousSecondaryLaunchConfigs = [];

	/** @var secondaryLaunchConfig[] */
	public $secondaryLaunchConfigs = [];

	/** @var boolean */
	public $startFirst;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/inserviceupgradestrategy',
	];

}
