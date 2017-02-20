<?php
namespace SamIT\Rancher\Generated\Entities;

class ScalePolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $increment;

	/** @var int */
	public $max;

	/** @var int */
	public $min;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/scalepolicy'];

}
