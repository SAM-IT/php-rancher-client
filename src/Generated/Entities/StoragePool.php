<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class StoragePool extends \SamIT\Rancher\Types\Entity
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

	/** @var string */
	public $driverName;

	/** @var string */
	public $externalId;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

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
	 * @api-type reference[storageDriver]
	 */
	public $storageDriverId;

	/** @var string */
	public $uuid;

	/** @var string */
	public $volumeAccessMode;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var reference[host][] */
	public $hostIds = [];

	/** @var string */
	public $blockDevicePath;

	/** @var string[] */
	public $volumeCapabilities = [];

	/** @var reference[volume][] */
	public $volumeIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagepool',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagepools',
	];


	public function getAccount(): Account
	{
	}


	public function getStorageDriver(): StorageDriver
	{
	}

}
