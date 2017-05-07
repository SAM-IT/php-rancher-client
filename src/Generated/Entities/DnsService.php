<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Generated\Maps\ServiceMap;
use SamIT\Rancher\Types\JsonMap;

class DnsService extends Service
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'assignServiceIpAddress',
		'created',
		'description',
		'externalId',
		'fqdn',
		'healthState',
		'id',
		'instanceIds',
		'kind',
		'launchConfig',
		'linkedServices',
		'metadata',
		'name',
		'removed',
		'retainIp',
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
	];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/dnsservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/dnsservices',
	];

}
