<?php
namespace SamIT\Rancher\Generated\Entities;

class InstanceStop extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['remove', 'timeout'];

	/** @var boolean */
	public $remove;

	/** @var int */
	public $timeout;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instancestop'];

}
