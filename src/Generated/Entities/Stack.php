<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Stack extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'externalId',
		'group',
		'healthState',
		'id',
		'kind',
		'name',
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
		'answers',
		'templates',
		'previousExternalId',
		'previousEnvironment',
		'startOnCreate',
		'outputs',
		'binding',
		'serviceIds',
	];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[account]
	 * @var string
	 */
	protected $accountId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $created;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $description;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $group;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $healthState;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $kind;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $removed;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type enum
	 * @var StateEnum
	 */
	protected $state;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $system;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type enum
	 * @var TransitioningEnum
	 */
	protected $transitioning;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $transitioningMessage;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $transitioningProgress;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $dockerCompose;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $rancherCompose;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $environment = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $answers = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $templates = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $previousExternalId;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $previousEnvironment = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type boolean
	 * @var boolean
	 */
	protected $startOnCreate;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $outputs = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type binding
	 * @var Binding
	 */
	protected $binding;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type array[reference[service]]
	 * @var string[][]
	 */
	protected $serviceIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stack',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/stacks',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $dockerCompose, string $rancherCompose, array $environment, \JsonMap $answers)
	{
		$result = new static();
		$result->dockerCompose = $dockerCompose;
		$result->rancherCompose = $rancherCompose;
		$result->environment = $environment;
		$result->answers = $answers;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getAccountId(): string
	{
		return $this->accountId;
	}


	/**
	 * --> getter from reference: reference[account]
	 */
	public function getAccount(): ?Account
	{
		return $this->client()->getAccount($this->accountId);
	}


	/**
	 * @simple-getter
	 */
	public function getCreated(): DateTimeInterface
	{
		return $this->created;
	}


	/**
	 * @simple-getter
	 */
	public function getDescription(): string
	{
		return $this->description;
	}


	public function setDescription(string $value = NULL)
	{
		$this->description = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getExternalId(): string
	{
		return $this->externalId;
	}


	public function setExternalId(string $value = NULL)
	{
		$this->externalId = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getGroup(): string
	{
		return $this->group;
	}


	public function setGroup(string $value = NULL)
	{
		$this->group = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getHealthState(): string
	{
		return $this->healthState;
	}


	/**
	 * @simple-getter
	 */
	public function getId(): string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 */
	public function getKind(): string
	{
		return $this->kind;
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
	public function getRemoved(): DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 * @return StateEnum
	 */
	public function getState(): StateEnum
	{
		return $this->state;
	}


	/**
	 * @simple-getter
	 */
	public function getSystem(): \boolean
	{
		return $this->system;
	}


	/**
	 * @simple-getter
	 */
	public function getUuid(): string
	{
		return $this->uuid;
	}


	/**
	 * @simple-getter
	 * @return TransitioningEnum
	 */
	public function getTransitioning(): TransitioningEnum
	{
		return $this->transitioning;
	}


	/**
	 * @simple-getter
	 */
	public function getTransitioningMessage(): string
	{
		return $this->transitioningMessage;
	}


	/**
	 * @simple-getter
	 */
	public function getTransitioningProgress(): int
	{
		return $this->transitioningProgress;
	}


	/**
	 * @simple-getter
	 */
	public function getDockerCompose(): string
	{
		return $this->dockerCompose;
	}


	/**
	 * @simple-getter
	 */
	public function getRancherCompose(): string
	{
		return $this->rancherCompose;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getEnvironment(): array
	{
		return $this->environment;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getAnswers(): SamIT\Rancher\Generated\Entities\JsonMap
	{
		return $this->answers;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getTemplates(): array
	{
		return $this->templates;
	}


	/**
	 * @simple-getter
	 */
	public function getPreviousExternalId(): string
	{
		return $this->previousExternalId;
	}


	public function setPreviousExternalId(string $value = NULL)
	{
		$this->previousExternalId = $value;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getPreviousEnvironment(): array
	{
		return $this->previousEnvironment;
	}


	public function setPreviousEnvironment(array $value = NULL)
	{
		$this->previousEnvironment = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getStartOnCreate(): \boolean
	{
		return $this->startOnCreate;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getOutputs(): array
	{
		return $this->outputs;
	}


	public function setOutputs(array $value = NULL)
	{
		$this->outputs = $value;
	}


	/**
	 * @simple-getter
	 * @return Binding
	 */
	public function getBinding(): Binding
	{
		return $this->binding;
	}


	public function setBinding(Binding $value = NULL)
	{
		$this->binding = $value;
	}


	/**
	 * @simple-getter
	 * @return string[][]
	 */
	public function getServiceIds(): array
	{
		return $this->serviceIds;
	}

}
