<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\TaskInstanceCollection;

class Task extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['id', 'name'];

	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/task',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/tasks',
	];


	public function getTaskInstances(): TaskInstanceCollection
	{
		return $this->client->retrieveEntities($this->links['taskInstances']);
	}

}
