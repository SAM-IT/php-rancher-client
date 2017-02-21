<?php
namespace SamIT\Rancher\Generated\Entities;

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
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var AuthTypeEnum */
	public $authType;

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $authenticatedAsAccountId;

	/**
	 * @var string
	 * @api-type reference[identity]
	 */
	public $authenticatedAsIdentityId;

	/** @var string */
	public $clientIp;

	/** @var date */
	public $created;

	/** @var string */
	public $description;

	/** @var string */
	public $eventType;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var int */
	public $resourceId;

	/** @var string */
	public $resourceType;

	/** @var string */
	public $responseCode;

	/** @var string */
	public $requestObject;

	/** @var string */
	public $responseObject;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/auditlog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/auditlogs',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getAuthenticatedAsAccount(): \SamIT\Rancher\Generated\Collections\AuthenticatedAsAccounCollection
	{
		return $this->client->retrieveEntities($this->links['authenticatedAsAccount']);
	}


	public function getAuthenticatedAsIdentity(): AuthenticatedAsIdentity
	{
	}

}
