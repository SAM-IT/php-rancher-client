<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class VolumeSnapshotInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['name'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/volumesnapshotinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $name)
	{
		$result = new static();
		$result->name = $name;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getName(): string
	{
		return $this->name;
	}

}
