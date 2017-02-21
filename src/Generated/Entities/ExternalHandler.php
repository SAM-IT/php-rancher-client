<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalHandler extends \SamIT\Rancher\Types\Entity
{
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

	/** @var int */
	public $priority;

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

	/** @var externalHandlerProcessConfig[] */
	public $processConfigs = [];

	/** @var int */
	public $retries;

	/** @var int */
	public $timeoutMillis;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalhandler',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalhandlers',
	];

}
