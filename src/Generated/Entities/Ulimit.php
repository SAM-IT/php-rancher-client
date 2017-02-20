<?php
namespace SamIT\Rancher\Generated\Entities;

class Ulimit extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $hard;

	/** @var string */
	public $name;

	/** @var int */
	public $soft;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/ulimit'];

}
