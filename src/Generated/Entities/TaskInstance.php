<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\TasCollection;

class TaskInstance extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'endTime',
		'exception',
		'id',
		'name',
		'serverId',
		'startTime',
		'taskId',
	];

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


	public function getTask(): TasCollection
	{
		return $this->client->retrieveEntities($this->links['task']);
	}

}
