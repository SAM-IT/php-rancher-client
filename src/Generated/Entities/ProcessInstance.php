<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessInstance extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var JsonMap */
	public $data = [];

	/** @var date */
	public $endTime;

	/** @var int */
	public $executionCount;

	/** @var string */
	public $exitReason;

	/** @var int */
	public $id;

	/** @var string */
	public $phase;

	/** @var int */
	public $priority;

	/** @var string */
	public $processName;

	/** @var string */
	public $resourceId;

	/** @var string */
	public $resourceType;

	/** @var string */
	public $result;

	/** @var date */
	public $runAfter;

	/** @var string */
	public $runningProcessServerId;

	/** @var string */
	public $startProcessServerId;

	/** @var date */
	public $startTime;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/processinstance',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/processinstances',
	];


	public function getAccount(): Account
	{
	}

}
