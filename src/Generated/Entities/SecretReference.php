<?php
namespace SamIT\Rancher\Generated\Entities;

class SecretReference extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['gid', 'mode', 'name', 'secretId', 'uid'];

	/** @var string */
	public $gid;

	/** @var string */
	public $mode;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[secret]
	 */
	public $secretId;

	/** @var string */
	public $uid;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/secretreference'];


	public function getSecret(): Secret
	{
	}

}
