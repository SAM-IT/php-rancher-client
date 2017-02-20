<?php
namespace SamIT\Rancher\Generated\Entities;

class Stack extends \SamIT\Rancher\Types\Entity
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
	public $externalId;

	/** @var string */
	public $group;

	/** @var string */
	public $healthState;

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

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var string */
	public $uuid;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $dockerCompose;

	/** @var string */
	public $rancherCompose;

	/** @var StringMap */
	public $environment = [];

	/** @var string */
	public $previousExternalId;

	/** @var StringMap */
	public $previousEnvironment = [];

	/** @var boolean */
	public $startOnCreate;

	/** @var StringMap */
	public $outputs = [];

	/** @var binding */
	public $binding;

	/** @var reference[service][] */
	public $serviceIds = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stack',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/stacks',
	];


	public function getAccount(): Account
	{
	}

}
