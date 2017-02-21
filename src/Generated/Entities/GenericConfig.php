<?php
namespace SamIT\Rancher\Generated\Entities;

class GenericConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['enginePort', 'ipAddress', 'sshKey', 'sshPort', 'sshUser'];

	/** @var string */
	public $enginePort;

	/** @var string */
	public $ipAddress;

	/** @var string */
	public $sshKey;

	/** @var string */
	public $sshPort;

	/** @var string */
	public $sshUser;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/genericconfig'];

}
