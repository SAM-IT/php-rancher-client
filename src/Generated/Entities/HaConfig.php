<?php
namespace SamIT\Rancher\Generated\Entities;

class HaConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $clusterSize;

	/** @var int */
	public $dbSize;

	/** @var boolean */
	public $enabled;

	/** @var string */
	public $dbHost;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/haconfig',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/haconfigs',
	];

}
