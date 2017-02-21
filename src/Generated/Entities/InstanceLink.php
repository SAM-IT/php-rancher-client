<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class InstanceLink extends \SamIT\Rancher\Types\Entity
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
	public $description;

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
	public $linkName;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $targetInstanceId;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var json[] */
	public $ports = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instancelink',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/instancelinks',
	];


	public function getAccount(): Account
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getTargetInstance(): TargetInstance
	{
	}

}
