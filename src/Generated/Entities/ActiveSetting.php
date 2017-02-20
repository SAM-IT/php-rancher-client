<?php
namespace SamIT\Rancher\Generated\Entities;

class ActiveSetting extends \SamIT\Rancher\Types\Entity
{
	/** @var json */
	public $activeValue;

	/** @var string */
	public $id;

	/** @var boolean */
	public $inDb;

	/** @var string */
	public $name;

	/** @var string */
	public $source;

	/** @var string */
	public $value;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/activesetting'];

}
