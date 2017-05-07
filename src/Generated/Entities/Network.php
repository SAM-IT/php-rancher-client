<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Network extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'id',
		'kind',
		'name',
		'networkDriverId',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'dns',
		'dnsSearch',
		'metadata',
		'subnets',
		'hostPorts',
		'defaultPolicyAction',
		'policy',
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
	 * @api-nullable false
	 * @api-type reference[networkDriver]
	 * @var string
	 */
	protected $networkDriverId;

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
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dns = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $dnsSearch = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var SamIT\Rancher\Types\JsonMap
	 */
	protected $metadata = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[subnet]
	 * @var Subnet[]
	 */
	protected $subnets = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $hostPorts;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var DefaultPolicyActionEnum
	 */
	protected $defaultPolicyAction;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[networkPolicyRule]
	 * @var NetworkPolicyRule[]
	 */
	protected $policy = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/network',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/networks',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\NetworkDriver $networkDriverId, array $dns, array $dnsSearch, \JsonMap $metadata, array $subnets, \boolean $hostPorts, DefaultPolicyActionEnum $defaultPolicyAction)
	{
		$result = new static();
		$result->networkDriverId = $networkDriverId;
		$result->dns = $dns;
		$result->dnsSearch = $dnsSearch;
		$result->metadata = $metadata;
		$result->subnets = $subnets;
		$result->hostPorts = $hostPorts;
		$result->defaultPolicyAction = $defaultPolicyAction;
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
	public function getNetworkDriverId(): string
	{
		return $this->networkDriverId;
	}


	/**
	 * --> getter from reference: reference[networkDriver]
	 */
	public function getNetworkDriver(): ?NetworkDriver
	{
		return $this->client()->getNetworkDriver($this->networkDriverId);
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
	 * @return string[]
	 */
	public function getDns(): array
	{
		return $this->dns;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getDnsSearch(): array
	{
		return $this->dnsSearch;
	}


	/**
	 * @simple-getter
	 * @return SamIT\Rancher\Types\JsonMap
	 */
	public function getMetadata(): SamIT\Rancher\Generated\Entities\JsonMap
	{
		return $this->metadata;
	}


	public function setMetadata(JsonMap $value)
	{
		$this->metadata = $value;
	}


	/**
	 * @simple-getter
	 * @return Subnet[]
	 */
	public function getSubnets(): array
	{
		return $this->subnets;
	}


	/**
	 * @simple-getter
	 */
	public function getHostPorts(): \boolean
	{
		return $this->hostPorts;
	}


	/**
	 * @simple-getter
	 * @return DefaultPolicyActionEnum
	 */
	public function getDefaultPolicyAction(): DefaultPolicyActionEnum
	{
		return $this->defaultPolicyAction;
	}


	public function setDefaultPolicyAction(DefaultPolicyActionEnum $value)
	{
		$this->defaultPolicyAction = $value;
	}


	/**
	 * @simple-getter
	 * @return NetworkPolicyRule[]
	 */
	public function getPolicy(): array
	{
		return $this->policy;
	}


	public function setPolicy(array $value = NULL)
	{
		$this->policy = $value;
	}

}
