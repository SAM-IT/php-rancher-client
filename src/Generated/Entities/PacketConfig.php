<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class PacketConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['apiKey', 'billingCycle', 'facilityCode', 'os', 'plan', 'projectId'];

	/**
	 * Packet api key
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $apiKey;

	/**
	 * Packet billing cycle, hourly or monthly
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $billingCycle;

	/**
	 * Packet facility code
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $facilityCode;

	/**
	 * Packet OS, possible values are: ubuntu_14_04
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $os;

	/**
	 * Packet Server Plan
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $plan;

	/**
	 * Packet Project Id
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $projectId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/packetconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $apiKey, string $billingCycle, string $facilityCode, string $os, string $plan, string $projectId)
	{
		$result = new static();
		$result->apiKey = $apiKey;
		$result->billingCycle = $billingCycle;
		$result->facilityCode = $facilityCode;
		$result->os = $os;
		$result->plan = $plan;
		$result->projectId = $projectId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getApiKey(): string
	{
		return $this->apiKey;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getBillingCycle(): string
	{
		return $this->billingCycle;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getFacilityCode(): string
	{
		return $this->facilityCode;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getOs(): string
	{
		return $this->os;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPlan(): string
	{
		return $this->plan;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getProjectId(): string
	{
		return $this->projectId;
	}

}
