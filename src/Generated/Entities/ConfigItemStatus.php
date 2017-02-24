<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\AccounCollection;
use SamIT\Rancher\Generated\Collections\AgenCollection;

class ConfigItemStatus extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accountId',
		'agentId',
		'appliedUpdated',
		'appliedVersion',
		'id',
		'name',
		'requestedUpdated',
		'requestedVersion',
		'sourceVersion',
	];

	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/**
	 * @var string
	 * @api-type reference[agent]
	 */
	public $agentId;

	/** @var date */
	public $appliedUpdated;

	/** @var int */
	public $appliedVersion;

	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var date */
	public $requestedUpdated;

	/** @var int */
	public $requestedVersion;

	/** @var string */
	public $sourceVersion;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/configitemstatus',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/configitemstatuses',
	];


	public function getAccount(): AccounCollection
	{
		return $this->client->retrieveEntities($this->links['account']);
	}


	public function getAgent(): AgenCollection
	{
		return $this->client->retrieveEntities($this->links['agent']);
	}

}
