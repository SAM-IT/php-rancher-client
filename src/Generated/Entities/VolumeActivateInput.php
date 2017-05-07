<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class VolumeActivateInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['hostId'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference
	 * @var Reference
	 */
	protected $hostId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volumeactivateinput',
	];


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
	 * @api-type reference
	 * @return Reference
	 */
	public function getHostId(): ?Reference
	{
		return $this->hostId;
	}

}
