<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessPool extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $activeTasks;

	/** @var int */
	public $completedTasks;

	/** @var int */
	public $maxPoolSize;

	/** @var int */
	public $minPoolSize;

	/** @var string */
	public $name;

	/** @var int */
	public $poolSize;

	/** @var int */
	public $queueRemainingCapacity;

	/** @var int */
	public $queueSize;

	/** @var int */
	public $rejectedTasks;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/processpool',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/processpools',
	];

}
