<?php
namespace SamIT\Rancher\Generated\Entities;

class Setting extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['id', 'name', 'value', 'activeValue', 'source', 'inDb'];

	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string */
	public $value;

	/** @var string */
	public $activeValue;

	/** @var string */
	public $source;

	/** @var boolean */
	public $inDb;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/setting',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/settings',
	];

}
