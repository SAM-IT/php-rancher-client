<?php
namespace SamIT\Rancher\Generated\Entities;

class ExternalVolumeEvent extends \SamIT\Rancher\Types\Entity
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

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var volume */
	public $volume;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalvolumeevent',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalvolumeevents',
	];


	public function getAccount(): Account
	{
	}


	public function getReportedAccount(): ReportedAccount
	{
	}

}
