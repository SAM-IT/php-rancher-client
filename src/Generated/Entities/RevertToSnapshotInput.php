<?php
namespace SamIT\Rancher\Generated\Entities;

class RevertToSnapshotInput extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[snapshot]
	 */
	public $snapshotId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/reverttosnapshotinput',
	];


	public function getSnapshot(): Snapshot
	{
	}

}
