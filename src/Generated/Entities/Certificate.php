<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Certificate extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'cert',
		'certChain',
		'created',
		'description',
		'id',
		'key',
		'kind',
		'name',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'certFingerprint',
		'CN',
		'expiresAt',
		'issuer',
		'issuedAt',
		'algorithm',
		'version',
		'serialNumber',
		'keySize',
		'subjectAlternativeNames',
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
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $cert;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $certChain;

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
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $key;

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
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $certFingerprint;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $CN;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $expiresAt;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $issuer;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $issuedAt;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $algorithm;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $version;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $serialNumber;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $keySize;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $subjectAlternativeNames = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/certificate',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/certificates',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $cert, string $key)
	{
		$result = new static();
		$result->cert = $cert;
		$result->key = $key;
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
	 * @api-type string
	 */
	public function getCert(): string
	{
		return $this->cert;
	}


	public function setCert(string $value)
	{
		$this->cert = $value;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCertChain(): ?string
	{
		return $this->certChain;
	}


	public function setCertChain(string $value = NULL)
	{
		$this->certChain = $value;
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
	public function getKey(): string
	{
		return $this->key;
	}


	public function setKey(string $value)
	{
		$this->key = $value;
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


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCertFingerprint(): string
	{
		return $this->certFingerprint;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getCN(): string
	{
		return $this->CN;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getExpiresAt(): string
	{
		return $this->expiresAt;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIssuer(): string
	{
		return $this->issuer;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getIssuedAt(): string
	{
		return $this->issuedAt;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getAlgorithm(): string
	{
		return $this->algorithm;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVersion(): string
	{
		return $this->version;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSerialNumber(): string
	{
		return $this->serialNumber;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getKeySize(): int
	{
		return $this->keySize;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getSubjectAlternativeNames(): array
	{
		return $this->subjectAlternativeNames;
	}

}
