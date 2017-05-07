<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ChangeSecretInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['oldSecret', 'newSecret'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $oldSecret;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $newSecret;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/changesecretinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $oldSecret, string $newSecret)
	{
		$result = new static();
		$result->oldSecret = $oldSecret;
		$result->newSecret = $newSecret;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getOldSecret(): string
	{
		return $this->oldSecret;
	}


	/**
	 * @simple-getter
	 */
	public function getNewSecret(): string
	{
		return $this->newSecret;
	}

}
