<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class KubernetesService extends \SamIT\Rancher\Types\Entity
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
	public $healthState;

	/** @var int */
	public $id;

	/** @var reference[instance][] */
	public $instanceIds = [];

	/** @var string */
	public $kind;

	/** @var Reference[service]Map */
	public $linkedServices = [];

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var string */
	public $selectorContainer;

	/**
	 * @var string
	 * @api-type reference[stack]
	 */
	public $stackId;

	/** @var StateEnum */
	public $state;

	/** @var boolean */
	public $system;

	/** @var TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

	/** @var string */
	public $vip;

	/** @var json */
	public $template;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/kubernetesservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/kubernetesservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
