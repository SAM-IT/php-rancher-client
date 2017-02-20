<?php
namespace SamIT\Rancher\Generated\Entities;

class Databasechangeloglock extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $id;

	/** @var boolean */
	public $locked;

	/** @var string */
	public $lockedby;

	/** @var date */
	public $lockgranted;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/databasechangeloglock',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/databasechangeloglocks',
	];

}
