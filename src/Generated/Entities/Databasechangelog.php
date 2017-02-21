<?php
namespace SamIT\Rancher\Generated\Entities;

class Databasechangelog extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'author',
		'comments',
		'dateexecuted',
		'description',
		'exectype',
		'filename',
		'id',
		'liquibase',
		'md5sum',
		'orderexecuted',
		'tag',
	];

	/** @var string */
	public $author;

	/** @var string */
	public $comments;

	/** @var date */
	public $dateexecuted;

	/** @var string */
	public $description;

	/** @var string */
	public $exectype;

	/** @var string */
	public $filename;

	/** @var string */
	public $id;

	/** @var string */
	public $liquibase;

	/** @var string */
	public $md5sum;

	/** @var int */
	public $orderexecuted;

	/** @var string */
	public $tag;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/databasechangelog',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/databasechangelogs',
	];

}
