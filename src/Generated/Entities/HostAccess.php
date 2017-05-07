<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class HostAccess extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['token', 'url'];

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
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/hostaccess'];


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
