<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class InServiceUpgradeStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'batchSize',
		'intervalMillis',
		'launchConfig',
		'previousLaunchConfig',
		'previousSecondaryLaunchConfigs',
		'secondaryLaunchConfigs',
		'startFirst',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $batchSize;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $intervalMillis;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type launchConfig
	 * @var LaunchConfig
	 */
	protected $launchConfig;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type launchConfig
	 * @var LaunchConfig
	 */
	protected $previousLaunchConfig;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type array[secondaryLaunchConfig]
	 * @var SecondaryLaunchConfig[]
	 */
	protected $previousSecondaryLaunchConfigs = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[secondaryLaunchConfig]
	 * @var SecondaryLaunchConfig[]
	 */
	protected $secondaryLaunchConfigs = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $startFirst;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/inserviceupgradestrategy',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $secondaryLaunchConfigs, \boolean $startFirst)
	{
		$result = new static();
		$result->secondaryLaunchConfigs = $secondaryLaunchConfigs;
		$result->startFirst = $startFirst;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getBatchSize(): ?int
	{
		return $this->batchSize;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getIntervalMillis(): ?int
	{
		return $this->intervalMillis;
	}


	/**
	 * @simple-getter
	 * @api-type launchConfig
	 * @return LaunchConfig
	 */
	public function getLaunchConfig(): ?LaunchConfig
	{
		return $this->launchConfig;
	}


	/**
	 * @simple-getter
	 * @api-type launchConfig
	 * @return LaunchConfig
	 */
	public function getPreviousLaunchConfig(): ?LaunchConfig
	{
		return $this->previousLaunchConfig;
	}


	/**
	 * @simple-getter
	 * @api-type array[secondaryLaunchConfig]
	 * @return SecondaryLaunchConfig[]
	 */
	public function getPreviousSecondaryLaunchConfigs(): array
	{
		return $this->previousSecondaryLaunchConfigs;
	}


	/**
	 * @simple-getter
	 * @api-type array[secondaryLaunchConfig]
	 * @return SecondaryLaunchConfig[]
	 */
	public function getSecondaryLaunchConfigs(): array
	{
		return $this->secondaryLaunchConfigs;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getStartFirst(): \boolean
	{
		return $this->startFirst;
	}

}
