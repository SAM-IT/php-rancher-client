<?php
namespace SamIT\Rancher\Generated\Entities;

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
		'data',
		'description',
		'id',
		'key',
		'kind',
		'name',
		'removeTime',
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
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var string */
	public $cert;

	/** @var string */
	public $certChain;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var int */
	public $id;

	/** @var string */
	public $key;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $certFingerprint;

	/** @var string */
	public $CN;

	/** @var string */
	public $expiresAt;

	/** @var string */
	public $issuer;

	/** @var string */
	public $issuedAt;

	/** @var string */
	public $algorithm;

	/** @var string */
	public $version;

	/** @var string */
	public $serialNumber;

	/** @var int */
	public $keySize;

	/** @var string[] */
	public $subjectAlternativeNames = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/certificate',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/certificates',
	];


	public function getAccount(): \SamIT\Rancher\Generated\Collections\AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}

}
