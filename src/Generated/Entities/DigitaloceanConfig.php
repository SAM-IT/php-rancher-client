<?php
namespace SamIT\Rancher\Generated\Entities;

class DigitaloceanConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $accessToken;

	/** @var boolean */
	public $backups;

	/** @var string */
	public $image;

	/** @var boolean */
	public $ipv6;

	/** @var boolean */
	public $privateNetworking;

	/** @var string */
	public $region;

	/** @var string */
	public $size;

	/** @var string */
	public $sshKeyFingerprint;

	/** @var string */
	public $sshKeyPath;

	/** @var string */
	public $sshPort;

	/** @var string */
	public $sshUser;

	/** @var string */
	public $userdata;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/digitaloceanconfig',
	];

}
