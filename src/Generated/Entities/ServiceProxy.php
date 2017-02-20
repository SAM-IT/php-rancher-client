<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceProxy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $port;

	/** @var \SamIT\Rancher\Generated\Enums\SchemeEnum */
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
