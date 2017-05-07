<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\SchemeEnum;

class ContainerProxy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['port', 'scheme'];

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

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerproxy'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(SchemeEnum $scheme)
	{
		$result = new static();
		$result->scheme = $scheme;
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

}
