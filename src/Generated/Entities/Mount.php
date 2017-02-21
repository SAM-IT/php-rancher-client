<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Mount extends \SamIT\Rancher\Types\Entity
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
	public $name;

	/** @var string */
	public $path;

	/** @var string */
	public $permissions;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/**
	 * @var string
	 * @api-type reference[volume]
	 */
	public $volumeId;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/mount',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/mounts',
	];


	public function getAccount(): Account
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getVolume(): Volume
	{
	}

}
