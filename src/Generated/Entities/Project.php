<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Project extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'created',
		'defaultNetworkId',
		'description',
		'healthState',
		'id',
		'kind',
		'name',
		'projectTemplateId',
		'removed',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'version',
		'hostRemoveDelaySeconds',
		'members',
		'orchestration',
		'virtualMachine',
		'servicesPortRange',
	];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var DateTimeInterface
	 */
	protected $created;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[network]
	 * @var string
	 */
	protected $defaultNetworkId;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $description;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[projectTemplate]
	 * @var string
	 */
	protected $projectTemplateId;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $uuid;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $version;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $hostRemoveDelaySeconds;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[projectMember]
	 * @var ProjectMember[]
	 */
	protected $members = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $orchestration;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $virtualMachine;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type servicesPortRange
	 * @var ServicesPortRange
	 */
	protected $servicesPortRange;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/project',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/projects',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $virtualMachine)
	{
		$result = new static();
		$result->virtualMachine = $virtualMachine;
		return $result;
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
	 * @return string
	 */
	public function getDefaultNetworkId(): string
	{
		return $this->defaultNetworkId;
	}


	/**
	 * --> getter from reference: reference[network]
	 */
	public function getDefaultNetwork(): ?DefaultNetwork
	{
		return $this->client()->getDefaultNetwork($this->defaultNetworkId);
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
	 * @return string
	 */
	public function getProjectTemplateId(): string
	{
		return $this->projectTemplateId;
	}


	/**
	 * --> getter from reference: reference[projectTemplate]
	 */
	public function getProjectTemplate(): ?ProjectTemplate
	{
		return $this->client()->getProjectTemplate($this->projectTemplateId);
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
	public function getUuid(): string
	{
		return $this->uuid;
	}


	/**
	 * @simple-getter
	 */
	public function getVersion(): string
	{
		return $this->version;
	}


	/**
	 * @simple-getter
	 */
	public function getHostRemoveDelaySeconds(): int
	{
		return $this->hostRemoveDelaySeconds;
	}


	public function setHostRemoveDelaySeconds(int $value = NULL)
	{
		$this->hostRemoveDelaySeconds = $value;
	}


	/**
	 * @simple-getter
	 * @return ProjectMember[]
	 */
	public function getMembers(): array
	{
		return $this->members;
	}


	/**
	 * @simple-getter
	 */
	public function getOrchestration(): string
	{
		return $this->orchestration;
	}


	/**
	 * @simple-getter
	 */
	public function getVirtualMachine(): \boolean
	{
		return $this->virtualMachine;
	}


	public function setVirtualMachine(\boolean $value)
	{
		$this->virtualMachine = $value;
	}


	/**
	 * @simple-getter
	 * @return ServicesPortRange
	 */
	public function getServicesPortRange(): ServicesPortRange
	{
		return $this->servicesPortRange;
	}


	public function setServicesPortRange(ServicesPortRange $value = NULL)
	{
		$this->servicesPortRange = $value;
	}

}
