<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerEvent extends \SamIT\Rancher\Types\Entity
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
	public $externalFrom;

	/** @var string */
	public $externalId;

	/** @var string */
	public $externalStatus;

	/** @var int */
	public $externalTimestamp;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $reportedHostUuid;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var json */
	public $dockerInspect;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerevent',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/containerevents',
	];


	public function getAccount(): Account
	{
	}


	public function getHost(): Host
	{
	}

}
