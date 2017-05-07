<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Types\JsonMap;
use SamIT\Rancher\Types\StringMap;

class KubernetesStack extends Stack
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
		'namespace',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $namespace;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/kubernetesstack',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/kubernetesstacks',
	];


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getNamespace(): string
	{
		return $this->namespace;
	}

}
