<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\BackupTargeCollection;

class SnapshotBackupInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['backupTargetId', 'data', 'name', 'removeTime'];

	/**
	 * @var string
	 * @api-type reference[backupTarget]
	 */
	public $backupTargetId;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/snapshotbackupinput',
	];


	public function getBackupTarget(): BackupTargeCollection
	{
		return $this->client->retrieveEntities($this->links['backupTarget']);
	}

}
