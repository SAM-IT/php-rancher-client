<?php
namespace SamIT\Rancher\Generated\Entities;

class TaskInstance extends \SamIT\Rancher\Types\Entity
{
	/** @var date */
	public $endTime;

	/** @var string */
	public $exception;

	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string */
	public $serverId;

	/** @var date */
	public $startTime;

	/**
	 * @var string
	 * @api-type reference[task]
	 */
	public $taskId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/taskinstance',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/taskinstances',
	];


	public function getTask(): Task
	{
	}

}
