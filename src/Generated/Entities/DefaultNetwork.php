<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\DefaultPolicyActionEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Types\JsonMap;

class DefaultNetwork extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'defaultPolicyAction',
		'description',
		'dns',
		'dnsSearch',
		'hostPorts',
		'id',
		'kind',
		'metadata',
		'name',
		'policy',
		'removed',
		'state',
		'subnets',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
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
	 * @var \\DateTimeInterface
	 */
	protected $created;

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
	 * @api-type string
	 * @var string
	 */
	protected $description;

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
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $hostPorts;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $kind;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[json]
	 * @var \\SamIT\Rancher\Types\JsonMap
	 */
	protected $metadata = [];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type array[networkPolicyRule]
	 * @var NetworkPolicyRule[]
	 */
	protected $policy = [];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type date
	 * @var \\DateTimeInterface
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
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[subnet]
	 * @var Subnet[]
	 */
	protected $subnets = [];

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

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/defaultnetwork'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(DefaultPolicyActionEnum $defaultPolicyAction, array $dns, array $dnsSearch, \boolean $hostPorts, JsonMap $metadata, array $subnets)
	{
		$result = new static();
		$result->defaultPolicyAction = $defaultPolicyAction;
		$result->dns = $dns;
		$result->dnsSearch = $dnsSearch;
		$result->hostPorts = $hostPorts;
		$result->metadata = $metadata;
		$result->subnets = $subnets;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[account]
	 * @return string
	 */
	public function getAccountId(): ?string
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
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getCreated(): ?DateTimeInterface
	{
		return $this->created;
	}


	/**
	 * @simple-getter
	 * @api-type enum
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
	 * @api-type string
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}


	public function setDescription(string $value = NULL)
	{
		$this->description = $value;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDns(): array
	{
		return $this->dns;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getDnsSearch(): array
	{
		return $this->dnsSearch;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getHostPorts(): \boolean
	{
		return $this->hostPorts;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getId(): ?string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getKind(): ?string
	{
		return $this->kind;
	}


	/**
	 * @simple-getter
	 * @api-type map[json]
	 * @return \\SamIT\Rancher\Types\JsonMap
	 */
	public function getMetadata(): \SamIT\Rancher\Types\JsonMap
	{
		return $this->metadata;
	}


	public function setMetadata(JsonMap $value)
	{
		$this->metadata = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}


	public function setName(string $value = NULL)
	{
		$this->name = $value;
	}


	/**
	 * @simple-getter
	 * @api-type array[networkPolicyRule]
	 * @return NetworkPolicyRule[]
	 */
	public function getPolicy(): ?array
	{
		return $this->policy;
	}


	public function setPolicy(array $value = NULL)
	{
		$this->policy = $value;
	}


	/**
	 * @simple-getter
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getRemoved(): ?DateTimeInterface
	{
		return $this->removed;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return StateEnum
	 */
	public function getState(): StateEnum
	{
		return $this->state;
	}


	/**
	 * @simple-getter
	 * @api-type array[subnet]
	 * @return Subnet[]
	 */
	public function getSubnets(): array
	{
		return $this->subnets;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return TransitioningEnum
	 */
	public function getTransitioning(): TransitioningEnum
	{
		return $this->transitioning;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getTransitioningMessage(): ?string
	{
		return $this->transitioningMessage;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getTransitioningProgress(): ?int
	{
		return $this->transitioningProgress;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUuid(): ?string
	{
		return $this->uuid;
	}

}
