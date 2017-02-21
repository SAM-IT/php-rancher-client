<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class VolumeTemplate extends \SamIT\Rancher\Types\Entity
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
	public $driver;

	/** @var boolean */
	public $external;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var boolean */
	public $perContainer;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var StringMap */
	public $driverOpts = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volumetemplate',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/volumetemplates',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
