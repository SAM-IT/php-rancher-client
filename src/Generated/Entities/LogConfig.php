<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class LogConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['config', 'driver'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $config = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $driver;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/logconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create()
	{
		$result = new static();
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getConfig(): array
	{
		return $this->config;
	}


	/**
	 * @simple-getter
	 */
	public function getDriver(): string
	{
		return $this->driver;
	}

}
