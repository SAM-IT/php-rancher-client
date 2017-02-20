<?php
namespace SamIT\Rancher\Generated\Entities;

class Openldapconfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $accessMode;

	/** @var int */
	public $connectionTimeout;

	/** @var string */
	public $domain;

	/** @var boolean */
	public $enabled;

	/** @var string */
	public $groupDNField;

	/** @var string */
	public $groupMemberMappingAttribute;

	/** @var string */
	public $groupMemberUserAttribute;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/openldapconfig',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/openldapconfigs',
	];

}
