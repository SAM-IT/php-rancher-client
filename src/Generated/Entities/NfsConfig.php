<?php
namespace SamIT\Rancher\Generated\Entities;

class NfsConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['server', 'share', 'mountOptions'];

	/** @var string */
	public $server;

	/** @var string */
	public $share;

	/** @var string */
	public $mountOptions;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/nfsconfig'];

}
