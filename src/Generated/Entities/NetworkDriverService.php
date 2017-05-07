<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class NetworkDriverService extends Service
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'assignServiceIpAddress',
		'createIndex',
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
		'secondaryLaunchConfigs',
		'selectorContainer',
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
		'networkDriver',
	];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type networkDriver
	 * @var NetworkDriver
	 */
	protected $networkDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkdriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/networkdriverservices',
	];


	/**
	 * @simple-getter
	 * @return NetworkDriver
	 */
	public function getNetworkDriver(): NetworkDriver
	{
		return $this->networkDriver;
	}


	public function setNetworkDriver(NetworkDriver $value)
	{
		$this->networkDriver = $value;
	}

}
