<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\SchemeEnum;

class ServiceProxy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['port', 'scheme', 'service', 'token', 'url'];

	/** @var int */
	public $port;

	/** @var SchemeEnum */
	public $scheme;

	/** @var string */
	public $service;

	/** @var string */
	public $token;

	/** @var string */
	public $url;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceproxy',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceproxies',
	];

}
