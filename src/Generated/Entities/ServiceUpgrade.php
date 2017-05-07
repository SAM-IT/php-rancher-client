<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ServiceUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['inServiceStrategy', 'toServiceStrategy'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type inServiceUpgradeStrategy
	 * @var InServiceUpgradeStrategy
	 */
	protected $inServiceStrategy;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type toServiceUpgradeStrategy
	 * @var ToServiceUpgradeStrategy
	 */
	protected $toServiceStrategy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceupgrade'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create()
	{
		$result = new static();
		return $result;
	}


	/**
	 * @simple-getter
	 * @return InServiceUpgradeStrategy
	 */
	public function getInServiceStrategy(): InServiceUpgradeStrategy
	{
		return $this->inServiceStrategy;
	}


	/**
	 * @simple-getter
	 * @return ToServiceUpgradeStrategy
	 */
	public function getToServiceStrategy(): ToServiceUpgradeStrategy
	{
		return $this->toServiceStrategy;
	}

}
