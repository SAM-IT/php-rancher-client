<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\AccessModeEnum;

class Ldapconfig extends \SamIT\Rancher\Types\Entity
{
	/** @var AccessModeEnum */
	public $accessMode;

	/** @var identity[] */
	public $allowedIdentities = [];

	/** @var int */
	public $connectionTimeout;

	/** @var string */
	public $domain;

	/** @var boolean */
	public $enabled;

	/** @var string */
	public $groupMemberMappingAttribute;

	/** @var string */
	public $groupNameField;

	/** @var string */
	public $groupObjectClass;

	/** @var string */
	public $groupSearchField;

	/** @var string */
	public $loginDomain;

	/** @var string */
	public $name;

	/** @var int */
	public $port;

	/** @var string */
	public $server;

	/** @var string */
	public $serviceAccountPassword;

	/** @var string */
	public $serviceAccountUsername;

	/** @var boolean */
	public $tls;

	/** @var int */
	public $userDisabledBitMask;

	/** @var string */
	public $userEnabledAttribute;

	/** @var string */
	public $userLoginField;

	/** @var string */
	public $userMemberAttribute;

	/** @var string */
	public $userNameField;

	/** @var string */
	public $userObjectClass;

	/** @var string */
	public $userSearchField;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/ldapconfig',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/ldapconfigs',
	];

}
