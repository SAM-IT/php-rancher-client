<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalDnsEvent extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'eventType',
		'externalId',
		'id',
		'kind',
		'reportedAccountId',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'uuid',
		'serviceName',
		'stackName',
		'fqdn',
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
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $eventType;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

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
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[account]
	 * @var string
	 */
	protected $reportedAccountId;

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
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $serviceName;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $stackName;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $fqdn;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externaldnsevent',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externaldnsevents',
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
	public function getEventType(): ?string
	{
		return $this->eventType;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getExternalId(): ?string
	{
		return $this->externalId;
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
	 * @api-type reference[account]
	 * @return string
	 */
	public function getReportedAccountId(): ?string
	{
		return $this->reportedAccountId;
	}


	/**
	 * --> getter from reference: reference[account]
	 */
	public function getReportedAccount(): ?Account
	{
		return $this->client()->getReportedAccount($this->reportedAccountId);
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
	public function getServiceName(): string
	{
		return $this->serviceName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getStackName(): string
	{
		return $this->stackName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getFqdn(): string
	{
		return $this->fqdn;
	}

}
