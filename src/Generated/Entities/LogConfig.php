<?php
namespace SamIT\Rancher\Generated\Entities;

class LogConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['config', 'driver'];

	/** @var StringMap */
	public $config = [];

	/** @var string */
	public $driver;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/logconfig'];

}
