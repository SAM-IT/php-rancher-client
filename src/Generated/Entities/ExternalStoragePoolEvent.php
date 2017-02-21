<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalStoragePoolEvent extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $eventType;

	/** @var string */
	public $externalId;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $reportedAccountId;

	/** @var StateEnum */
	public $state;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public $hostUuids = [];

	/** @var storagePool */
	public $storagePool;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalstoragepoolevent',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalstoragepoolevents',
	];


	public function getAccount(): Account
	{
	}


	public function getReportedAccount(): ReportedAccount
	{
	}

}
