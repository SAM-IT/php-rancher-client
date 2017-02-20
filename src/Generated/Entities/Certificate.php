<?php
namespace SamIT\Rancher\Generated\Entities;

class Certificate extends \SamIT\Rancher\Types\Entity
{
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

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
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


	public function getAccount(): Account
	{
	}

}
