<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

/**
 * @method LbConfig getLbConfig Implementation in parent.
 */
class LoadBalancerService extends Service
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'assignServiceIpAddress',
		'created',
		'currentScale',
		'description',
		'externalId',
		'fqdn',
		'healthState',
		'id',
		'instanceIds',
		'kind',
		'launchConfig',
		'lbConfig',
		'linkedServices',
		'metadata',
		'name',
		'publicEndpoints',
		'removed',
		'retainIp',
		'scale',
		'scalePolicy',
		'selectorLink',
		'stackId',
		'startOnCreate',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'upgrade',
		'uuid',
		'vip',
	];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type launchConfig
	 * @var LaunchConfig
	 */
	protected $launchConfig;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type lbConfig
	 * @var LbConfig
	 */
	protected $lbConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/loadbalancerservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/loadbalancerservices',
	];


	public function setLaunchConfig(LaunchConfig $value = NULL)
	{
		$this->launchConfig = $value;
	}

}
