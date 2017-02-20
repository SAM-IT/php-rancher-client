<?php
namespace SamIT\Rancher\Generated\Entities;

class Task extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/task',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/tasks',
	];

}
