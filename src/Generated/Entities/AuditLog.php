<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\AuthTypeEnum;

class AuditLog extends \SamIT\Rancher\Types\Entity
{
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


	public function getAccount(): Account
	{
	}


	public function getAuthenticatedAsAccount(): AuthenticatedAsAccount
	{
	}


	public function getAuthenticatedAsIdentity(): AuthenticatedAsIdentity
	{
	}

}
