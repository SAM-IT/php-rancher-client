<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class RevertToSnapshotInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['snapshotId'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[snapshot]
	 * @var string
	 */
	protected $snapshotId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/reverttosnapshotinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\Snapshot $snapshotId)
	{
		$result = new static();
		$result->snapshotId = $snapshotId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[snapshot]
	 * @return string
	 */
	public function getSnapshotId(): string
	{
		return $this->snapshotId;
	}


	/**
	 * --> getter from reference: reference[snapshot]
	 */
	public function getSnapshot(): ?Snapshot
	{
		return $this->client()->getSnapshot($this->snapshotId);
	}

}
