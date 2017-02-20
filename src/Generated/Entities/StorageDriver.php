<?php
namespace SamIT\Rancher\Generated\Entities;

class StorageDriver extends \SamIT\Rancher\Types\Entity
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

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[service]
	 */
	public $serviceId;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var \SamIT\Rancher\Generated\Enums\VolumeAccessModeEnum */
	public $volumeAccessMode;

	/** @var string[] */
	public $volumeCapabilities = [];

	/** @var string */
	public $blockDevicePath;

	/** @var \SamIT\Rancher\Generated\Enums\ScopeEnum */
	public $scope;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/storagedriver',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/storagedrivers',
	];


	public function getAccount(): Account
	{
	}


	public function getService(): Service
	{
	}

}
