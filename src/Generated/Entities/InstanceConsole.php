<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class InstanceConsole extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['url', 'kind', 'password'];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $url;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $kind;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $password;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instanceconsole'];


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
	 * @api-type string
	 */
	public function getUrl(): string
	{
		return $this->url;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getKind(): string
	{
		return $this->kind;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPassword(): string
	{
		return $this->password;
	}

}
