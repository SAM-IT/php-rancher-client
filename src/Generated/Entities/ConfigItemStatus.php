<?php
namespace SamIT\Rancher\Generated\Entities;

class ConfigItemStatus extends \SamIT\Rancher\Types\Entity
{
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


	public function getAccount(): Account
	{
	}


	public function getAgent(): Agent
	{
	}

}
