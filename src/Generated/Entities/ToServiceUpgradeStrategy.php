<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ToServiceUpgradeStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'batchSize',
		'finalScale',
		'intervalMillis',
		'toServiceId',
		'updateLinks',
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
	protected $finalScale;

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
	 * @api-nullable false
	 * @api-type reference[service]
	 * @var string
	 */
	protected $toServiceId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $updateLinks;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/toserviceupgradestrategy',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\Service $toServiceId, \boolean $updateLinks)
	{
		$result = new static();
		$result->toServiceId = $toServiceId;
		$result->updateLinks = $updateLinks;
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
	public function getFinalScale(): ?int
	{
		return $this->finalScale;
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
	 * @api-type reference[service]
	 * @return string
	 */
	public function getToServiceId(): string
	{
		return $this->toServiceId;
	}


	/**
	 * --> getter from reference: reference[service]
	 */
	public function getToService(): ?Service
	{
		return $this->client()->getToService($this->toServiceId);
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getUpdateLinks(): \boolean
	{
		return $this->updateLinks;
	}

}
