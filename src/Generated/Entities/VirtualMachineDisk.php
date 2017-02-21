<?php
namespace SamIT\Rancher\Generated\Entities;

class VirtualMachineDisk extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['driver', 'name', 'opts', 'readIops', 'root', 'size', 'writeIops'];

	/** @var string */
	public $driver;

	/** @var string */
	public $name;

	/** @var StringMap */
	public $opts = [];

	/** @var int */
	public $readIops;

	/** @var boolean */
	public $root;

	/** @var string */
	public $size;

	/** @var int */
	public $writeIops;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/virtualmachinedisk',
	];

}
