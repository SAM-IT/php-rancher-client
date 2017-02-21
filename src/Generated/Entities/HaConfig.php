<?php
namespace SamIT\Rancher\Generated\Entities;

class HaConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['clusterSize', 'dbSize', 'enabled', 'dbHost'];

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
