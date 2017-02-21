<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerLogs extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['follow', 'lines'];

	/** @var boolean */
	public $follow;

	/** @var int */
	public $lines;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerlogs'];

}
