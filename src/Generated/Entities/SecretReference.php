<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class SecretReference extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['gid', 'mode', 'name', 'secretId', 'uid'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $gid;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $mode;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[secret]
	 * @var string
	 */
	protected $secretId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $uid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/secretreference'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $gid, string $mode, string $name, \Secret $secretId, string $uid)
	{
		$result = new static();
		$result->gid = $gid;
		$result->mode = $mode;
		$result->name = $name;
		$result->secretId = $secretId;
		$result->uid = $uid;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getGid(): string
	{
		return $this->gid;
	}


	/**
	 * @simple-getter
	 */
	public function getMode(): string
	{
		return $this->mode;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getSecretId(): string
	{
		return $this->secretId;
	}


	/**
	 * --> getter from reference: reference[secret]
	 */
	public function getSecret(): ?Secret
	{
		return $this->client()->getSecret($this->secretId);
	}


	/**
	 * @simple-getter
	 */
	public function getUid(): string
	{
		return $this->uid;
	}

}
