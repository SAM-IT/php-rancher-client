<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class NfsConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['server', 'share', 'mountOptions'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $server;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $share;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $mountOptions;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/nfsconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $server, string $share)
	{
		$result = new static();
		$result->server = $server;
		$result->share = $share;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getServer(): string
	{
		return $this->server;
	}


	/**
	 * @simple-getter
	 */
	public function getShare(): string
	{
		return $this->share;
	}


	/**
	 * @simple-getter
	 */
	public function getMountOptions(): string
	{
		return $this->mountOptions;
	}

}
