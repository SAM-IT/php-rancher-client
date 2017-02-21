<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class KubernetesStack extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'binding',
		'created',
		'data',
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
		'removeTime',
		'removed',
		'serviceIds',
		'state',
		'system',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'templates',
		'namespace',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var binding */
	public $binding;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var StringMap */
	public $environment = [];

	/** @var string */
	public $externalId;

	/** @var string */
	public $group;

	/** @var string */
	public $healthState;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var StringMap */
	public $previousEnvironment = [];

	/** @var string */
	public $previousExternalId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var StringMap */
	public $templates = [];

	/** @var string */
	public $namespace;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/kubernetesstack',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/kubernetesstacks',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getVolumeTemplates(): \SamIT\Rancher\Generated\Collections\VolumeTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['volumeTemplates']);
	}


	public function getVolumes(): \SamIT\Rancher\Generated\Collections\VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getConfigItemStatuses(): \SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getServices(): \SamIT\Rancher\Generated\Collections\ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getSecrets(): \SamIT\Rancher\Generated\Collections\SecretCollection
	{
		return $this->client->retrieveEntities($this->links['secrets']);
	}

}
