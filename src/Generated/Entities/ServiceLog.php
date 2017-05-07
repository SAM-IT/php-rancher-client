<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;

class ServiceLog extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'description',
		'endTime',
		'eventType',
		'id',
		'instanceId',
		'kind',
		'level',
		'serviceId',
		'subLog',
		'transactionId',
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
	 * @api-type date
	 * @var \\DateTimeInterface
	 */
	protected $endTime;

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
	 * @api-type int
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[instance]
	 * @var string
	 */
	protected $instanceId;

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
	 * @api-type string
	 * @var string
	 */
	protected $level;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[service]
	 * @var string
	 */
	protected $serviceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $subLog;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $transactionId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicelog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/servicelogs',
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
	 * @api-type date
	 * @return \\DateTimeInterface
	 */
	public function getEndTime(): ?DateTimeInterface
	{
		return $this->endTime;
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
	 * @api-type int
	 */
	public function getId(): ?string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 * @api-type reference[instance]
	 * @return string
	 */
	public function getInstanceId(): ?string
	{
		return $this->instanceId;
	}


	/**
	 * --> getter from reference: reference[instance]
	 */
	public function getInstance(): ?Instance
	{
		return $this->client()->getInstance($this->instanceId);
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
	public function getLevel(): ?string
	{
		return $this->level;
	}


	/**
	 * @simple-getter
	 * @api-type reference[service]
	 * @return string
	 */
	public function getServiceId(): ?string
	{
		return $this->serviceId;
	}


	/**
	 * --> getter from reference: reference[service]
	 */
	public function getService(): ?Service
	{
		return $this->client()->getService($this->serviceId);
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getSubLog(): \boolean
	{
		return $this->subLog;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getTransactionId(): ?string
	{
		return $this->transactionId;
	}

}
