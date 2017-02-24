<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\HosCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ContainerEvent extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'externalFrom',
		'externalId',
		'externalStatus',
		'externalTimestamp',
		'hostId',
		'id',
		'kind',
		'reportedHostUuid',
		'state',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
		'dockerInspect',
	];

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

	/** @var StateEnum */
	public $state;

	/** @var TransitioningEnum */
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


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getHost(): HosCollection
	{
		return $this->client->retrieveEntities($this->links['host']);
	}

}
