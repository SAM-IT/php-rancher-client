<?php
namespace SamIT\Rancher\Generated\Entities;

class LocalAuthConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $accessMode;

	/** @var boolean */
	public $enabled;

	/** @var string */
	public $name;

	/** @var password */
	public $password;

	/** @var string */
	public $username;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/localauthconfig',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/localauthconfigs',
	];

}
