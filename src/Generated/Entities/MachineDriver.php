<?php
namespace SamIT\Rancher\Generated\Entities;

class MachineDriver extends \SamIT\Rancher\Types\Entity
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

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

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

	/** @var string */
	public $url;

	/** @var string */
	public $externalId;

	/** @var boolean */
	public $builtin;

	/** @var boolean */
	public $defaultActive;

	/** @var boolean */
	public $activateOnCreate;

	/** @var string */
	public $checksum;

	/** @var string */
	public $uiUrl;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/machinedriver',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/machinedrivers',
	];

}
