<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StrategyEnum;

class InstanceHealthCheck extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $healthyThreshold;

	/** @var int */
	public $initializingTimeout;

	/** @var int */
	public $interval;

	/** @var string */
	public $name;

	/** @var int */
	public $port;

	/** @var recreateOnQuorumStrategyConfig */
	public $recreateOnQuorumStrategyConfig;

	/** @var int */
	public $reinitializingTimeout;

	/** @var string */
	public $requestLine;

	/** @var int */
	public $responseTimeout;

	/** @var StrategyEnum */
	public $strategy;

	/** @var int */
	public $unhealthyThreshold;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instancehealthcheck',
	];

}
