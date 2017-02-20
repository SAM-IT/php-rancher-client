<?php
namespace SamIT\Rancher\Generated\Entities;

class LogConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var StringMap */
	public $config = [];

	/** @var string */
	public $driver;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/logconfig'];

}