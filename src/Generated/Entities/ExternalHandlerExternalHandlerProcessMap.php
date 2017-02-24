<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\ExternalHandleCollection;
use SamIT\Rancher\Generated\Collections\ExternalHandlerProcesCollection;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalHandlerExternalHandlerProcessMap extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'created',
		'data',
		'description',
		'eventName',
		'externalHandlerId',
		'externalHandlerProcessId',
		'id',
		'kind',
		'name',
		'onError',
		'removeTime',
		'removed',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
	];

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


	public function getExternalHandler(): ExternalHandleCollection
	{
		return $this->client->retrieveEntities($this->links['externalHandler']);
	}


	public function getExternalHandlerProcess(): ExternalHandlerProcesCollection
	{
		return $this->client->retrieveEntities($this->links['externalHandlerProcess']);
	}

}
