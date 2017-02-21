<?php
namespace SamIT\Rancher\Generated\Entities;

class ScalePolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['increment', 'max', 'min'];

	/** @var int */
	public $increment;

	/** @var int */
	public $max;

	/** @var int */
	public $min;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/scalepolicy'];

}
