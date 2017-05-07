<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\ModeEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;
use SamIT\Rancher\Types\StringMap;

class PullTask extends GenericObject
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'id',
		'kind',
		'name',
		'removed',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'image',
		'labels',
		'mode',
		'status',
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
	 * @api-update false
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
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $image;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $labels = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var ModeEnum
	 */
	protected $mode;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $status = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/pulltask',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/pulltasks',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $image, StringMap $labels, ModeEnum $mode)
	{
		$result = new static();
		$result->image = $image;
		$result->labels = $labels;
		$result->mode = $mode;
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


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getImage(): string
	{
		return $this->image;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getLabels(): \SamIT\Rancher\Types\StringMap
	{
		return $this->labels;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return ModeEnum
	 */
	public function getMode(): ModeEnum
	{
		return $this->mode;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getStatus(): \SamIT\Rancher\Types\StringMap
	{
		return $this->status;
	}

}
