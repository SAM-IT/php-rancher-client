<?php
namespace SamIT\Rancher\Generated\Entities;

class Azureadconfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'accessMode',
		'adminAccountPassword',
		'adminAccountUsername',
		'clientId',
		'domain',
		'enabled',
		'name',
		'tenantId',
	];

	/** @var string */
	public $accessMode;

	/** @var string */
	public $adminAccountPassword;

	/** @var string */
	public $adminAccountUsername;

	/** @var string */
	public $clientId;

	/** @var string */
	public $domain;

	/** @var boolean */
	public $enabled;

	/** @var string */
	public $name;

	/** @var string */
	public $tenantId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/azureadconfig',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/azureadconfigs',
	];

}
