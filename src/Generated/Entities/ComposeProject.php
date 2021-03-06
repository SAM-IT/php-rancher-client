<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Types\JsonMap;
use SamIT\Rancher\Types\StringMap;

class ComposeProject extends Stack
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'answers',
		'binding',
		'created',
		'description',
		'environment',
		'externalId',
		'group',
		'healthState',
		'id',
		'kind',
		'name',
		'previousEnvironment',
		'previousExternalId',
		'removed',
		'serviceIds',
		'state',
		'system',
		'templates',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/composeproject',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/composeprojects',
	];

}
