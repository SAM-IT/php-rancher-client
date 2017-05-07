<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Subnet extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'cidrSize',
		'created',
		'description',
		'endAddress',
		'gateway',
		'id',
		'kind',
		'name',
		'networkAddress',
		'networkId',
		'removed',
		'startAddress',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
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
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $cidrSize;

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
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $description;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $endAddress;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $gateway;

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
	 * @api-type string
	 * @var string
	 */
	protected $networkAddress;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[network]
	 * @var string
	 */
	protected $networkId;

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
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $startAddress;

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

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/subnet',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/subnets',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create()
	{
		$result = new static();
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
	 * @api-type int
	 */
	public function getCidrSize(): ?int
	{
		return $this->cidrSize;
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
	 * @api-type string
	 */
	public function getEndAddress(): ?string
	{
		return $this->endAddress;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getGateway(): ?string
	{
		return $this->gateway;
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
	 * @api-type string
	 */
	public function getNetworkAddress(): ?string
	{
		return $this->networkAddress;
	}


	/**
	 * @simple-getter
	 * @api-type reference[network]
	 * @return string
	 */
	public function getNetworkId(): ?string
	{
		return $this->networkId;
	}


	/**
	 * --> getter from reference: reference[network]
	 */
	public function getNetwork(): ?Network
	{
		return $this->client()->getNetwork($this->networkId);
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
	 * @api-type string
	 */
	public function getStartAddress(): ?string
	{
		return $this->startAddress;
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
	 * @api-type string
	 */
	public function getUuid(): ?string
	{
		return $this->uuid;
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

}
