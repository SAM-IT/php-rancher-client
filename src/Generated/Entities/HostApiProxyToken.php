<?php
namespace SamIT\Rancher\Generated\Entities;

class HostApiProxyToken extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $reportedUuid;

	/** @var string */
	public $token;

	/** @var string */
	public $url;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/hostapiproxytoken',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/hostapiproxytokens',
	];

}
