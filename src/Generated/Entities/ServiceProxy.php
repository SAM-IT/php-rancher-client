<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\SchemeEnum;

class ServiceProxy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['port', 'scheme', 'service', 'token', 'url'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $port;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var SchemeEnum
	 */
	protected $scheme;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $service;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $token;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $url;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/serviceproxy',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/serviceproxies',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(SchemeEnum $scheme, string $service)
	{
		$result = new static();
		$result->scheme = $scheme;
		$result->service = $service;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getPort(): ?int
	{
		return $this->port;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return SchemeEnum
	 */
	public function getScheme(): SchemeEnum
	{
		return $this->scheme;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getService(): string
	{
		return $this->service;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getToken(): string
	{
		return $this->token;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}

}
