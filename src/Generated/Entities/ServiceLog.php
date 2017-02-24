<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\InstancCollection;
use SamIT\Rancher\Generated\Collections\ServicCollection;

class ServiceLog extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'created',
		'data',
		'description',
		'endTime',
		'eventType',
		'id',
		'instanceId',
		'kind',
		'level',
		'serviceId',
		'subLog',
		'transactionId',
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
	public $description;

	/** @var date */
	public $endTime;

	/** @var string */
	public $eventType;

	/** @var int */
	public $id;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $kind;

	/** @var string */
	public $level;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var boolean */
	public $subLog;

	/** @var string */
	public $transactionId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicelog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/servicelogs',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getInstance(): InstancCollection
	{
		return $this->client->retrieveEntities($this->links['instance']);
	}


	public function getService(): ServicCollection
	{
		return $this->client->retrieveEntities($this->links['service']);
	}

}
