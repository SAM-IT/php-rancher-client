<?php
namespace SamIT\Rancher\Generated\Entities;

class BlkioDeviceOption extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['readBps', 'readIops', 'weight', 'writeBps', 'writeIops'];

	/** @var int */
	public $readBps;

	/** @var int */
	public $readIops;

	/** @var int */
	public $weight;

	/** @var int */
	public $writeBps;

	/** @var int */
	public $writeIops;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/blkiodeviceoption',
	];

}
