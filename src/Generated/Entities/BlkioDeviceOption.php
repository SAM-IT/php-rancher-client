<?php
namespace SamIT\Rancher\Generated\Entities;

class BlkioDeviceOption extends \SamIT\Rancher\Types\Entity
{
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
