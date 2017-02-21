<?php
namespace SamIT\Rancher\Generated\Entities;

class InstanceConsole extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['url', 'kind', 'password'];

	/** @var string */
	public $url;

	/** @var string */
	public $kind;

	/** @var string */
	public $password;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instanceconsole'];

}
