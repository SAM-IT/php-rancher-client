<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\ConfigItemStatuseCollection;
use SamIT\Rancher\Generated\Collections\SecretCollection;
use SamIT\Rancher\Generated\Collections\ServiceCollection;
use SamIT\Rancher\Generated\Collections\VolumeCollection;
use SamIT\Rancher\Generated\Collections\VolumeTemplateCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Stack extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'externalId',
		'group',
		'healthState',
		'id',
		'kind',
		'name',
		'removeTime',
		'removed',
		'state',
		'system',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'dockerCompose',
		'rancherCompose',
		'environment',
		'previousExternalId',
		'previousEnvironment',
		'startOnCreate',
		'outputs',
		'binding',
		'serviceIds',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

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

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $dockerCompose;

	/** @var string */
	public $rancherCompose;

	/** @var StringMap */
	public $environment = [];

	/** @var string */
	public $previousExternalId;

	/** @var StringMap */
	public $previousEnvironment = [];

	/** @var boolean */
	public $startOnCreate;

	/** @var StringMap */
	public $outputs = [];

	/** @var binding */
	public $binding;

	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stack',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/stacks',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getVolumeTemplates(): VolumeTemplateCollection
	{
		return $this->client->retrieveEntities($this->links['volumeTemplates']);
	}


	public function getVolumes(): VolumeCollection
	{
		return $this->client->retrieveEntities($this->links['volumes']);
	}


	public function getConfigItemStatuses(): ConfigItemStatuseCollection
	{
		return $this->client->retrieveEntities($this->links['configItemStatuses']);
	}


	public function getServices(): ServiceCollection
	{
		return $this->client->retrieveEntities($this->links['services']);
	}


	public function getSecrets(): SecretCollection
	{
		return $this->client->retrieveEntities($this->links['secrets']);
	}

}
