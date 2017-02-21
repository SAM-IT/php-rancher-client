<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Volume extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $accessMode;

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
	public $externalId;

	/**
	 * @var string
	 * @api-type reference[host]
	 */
	public $hostId;

	/** @var int */
	public $id;

	/**
	 * @var string
	 * @api-type reference[image]
	 */
	public $imageId;

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var int */
	public $sizeMb;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var StateEnum */
	public $state;

	/**
	 * @var string
	 * @api-type reference[storageDriver]
	 */
	public $storageDriverId;

	/** @var string */
	public $uri;

	/** @var string */
	public $uuid;

	/**
	 * @var string
	 * @api-type reference[volumeTemplate]
	 */
	public $volumeTemplateId;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var boolean */
	public $isHostPath;

	/** @var string */
	public $driver;

	/** @var StringMap */
	public $driverOpts = [];

	/** @var mountEntry[] */
	public $mounts = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volume',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/volumes',
	];


	public function getAccount(): Account
	{
	}


	public function getHost(): Host
	{
	}


	public function getImage(): Image
	{
	}


	public function getInstance(): Instance
	{
	}


	public function getStack(): Stack
	{
	}


	public function getStorageDriver(): StorageDriver
	{
	}


	public function getVolumeTemplate(): VolumeTemplate
	{
	}

}
