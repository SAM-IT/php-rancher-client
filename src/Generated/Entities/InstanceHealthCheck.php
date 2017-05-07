<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StrategyEnum;

class InstanceHealthCheck extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'healthyThreshold',
		'initializingTimeout',
		'interval',
		'name',
		'port',
		'recreateOnQuorumStrategyConfig',
		'reinitializingTimeout',
		'requestLine',
		'responseTimeout',
		'strategy',
		'unhealthyThreshold',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $healthyThreshold;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $initializingTimeout;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $interval;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $port;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type recreateOnQuorumStrategyConfig
	 * @var RecreateOnQuorumStrategyConfig
	 */
	protected $recreateOnQuorumStrategyConfig;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $reinitializingTimeout;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $requestLine;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $responseTimeout;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type enum
	 * @var StrategyEnum
	 */
	protected $strategy;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $unhealthyThreshold;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instancehealthcheck',
	];


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
	 */
	public function getHealthyThreshold(): int
	{
		return $this->healthyThreshold;
	}


	/**
	 * @simple-getter
	 */
	public function getInitializingTimeout(): int
	{
		return $this->initializingTimeout;
	}


	/**
	 * @simple-getter
	 */
	public function getInterval(): int
	{
		return $this->interval;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	public function setName(string $value = NULL)
	{
		$this->name = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getPort(): int
	{
		return $this->port;
	}


	/**
	 * @simple-getter
	 * @return RecreateOnQuorumStrategyConfig
	 */
	public function getRecreateOnQuorumStrategyConfig(): RecreateOnQuorumStrategyConfig
	{
		return $this->recreateOnQuorumStrategyConfig;
	}


	/**
	 * @simple-getter
	 */
	public function getReinitializingTimeout(): int
	{
		return $this->reinitializingTimeout;
	}


	/**
	 * @simple-getter
	 */
	public function getRequestLine(): string
	{
		return $this->requestLine;
	}


	/**
	 * @simple-getter
	 */
	public function getResponseTimeout(): int
	{
		return $this->responseTimeout;
	}


	/**
	 * @simple-getter
	 * @return StrategyEnum
	 */
	public function getStrategy(): StrategyEnum
	{
		return $this->strategy;
	}


	/**
	 * @simple-getter
	 */
	public function getUnhealthyThreshold(): int
	{
		return $this->unhealthyThreshold;
	}

}
