<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalHandlerExternalHandlerProcessMap extends \SamIT\Rancher\Types\Entity
{
	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $eventName;

	/**
	 * @var string
	 * @api-type reference[externalHandler]
	 */
	public $externalHandlerId;

	/**
	 * @var string
	 * @api-type reference[externalHandlerProcess]
	 */
	public $externalHandlerProcessId;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var string */
	public $onError;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

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

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalhandlerexternalhandlerprocessmap',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalhandlerexternalhandlerprocessmaps',
	];


	public function getExternalHandler(): ExternalHandler
	{
	}


	public function getExternalHandlerProcess(): ExternalHandlerProcess
	{
	}

}
