<?php
namespace SamIT\Rancher\Generated\Entities;

use DateTimeInterface;
use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\AuthTypeEnum;

class AuditLog extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'authType',
		'authenticatedAsAccountId',
		'authenticatedAsIdentityId',
		'clientIp',
		'created',
		'description',
		'eventType',
		'id',
		'kind',
		'resourceId',
		'resourceType',
		'responseCode',
		'requestObject',
		'responseObject',
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
	 * @api-type enum
	 * @var AuthTypeEnum
	 */
	protected $authType;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[account]
	 * @var string
	 */
	protected $authenticatedAsAccountId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type reference[identity]
	 * @var string
	 */
	protected $authenticatedAsIdentityId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $clientIp;

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
	 * @api-type string
	 * @var string
	 */
	protected $kind;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $resourceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $resourceType;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $responseCode;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $requestObject;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $responseObject;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/auditlog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/auditlogs',
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
	 * @return AuthTypeEnum
	 */
	public function getAuthType(): AuthTypeEnum
	{
		return $this->authType;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getAuthenticatedAsAccountId(): string
	{
		return $this->authenticatedAsAccountId;
	}


	/**
	 * --> getter from reference: reference[account]
	 */
	public function getAuthenticatedAsAccount(): ?AuthenticatedAsAccount
	{
		return $this->client()->getAuthenticatedAsAccount($this->authenticatedAsAccountId);
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getAuthenticatedAsIdentityId(): string
	{
		return $this->authenticatedAsIdentityId;
	}


	/**
	 * --> getter from reference: reference[identity]
	 */
	public function getAuthenticatedAsIdentity(): ?AuthenticatedAsIdentity
	{
		return $this->client()->getAuthenticatedAsIdentity($this->authenticatedAsIdentityId);
	}


	/**
	 * @simple-getter
	 */
	public function getClientIp(): string
	{
		return $this->clientIp;
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


	/**
	 * @simple-getter
	 */
	public function getEventType(): string
	{
		return $this->eventType;
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
	public function getResourceId(): int
	{
		return $this->resourceId;
	}


	/**
	 * @simple-getter
	 */
	public function getResourceType(): string
	{
		return $this->resourceType;
	}


	/**
	 * @simple-getter
	 */
	public function getResponseCode(): string
	{
		return $this->responseCode;
	}


	/**
	 * @simple-getter
	 */
	public function getRequestObject(): string
	{
		return $this->requestObject;
	}


	/**
	 * @simple-getter
	 */
	public function getResponseObject(): string
	{
		return $this->responseObject;
	}

}
