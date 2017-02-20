<?php
namespace SamIT\Rancher\Generated\Entities;

class SnapshotBackupInput extends \SamIT\Rancher\Types\Entity
{
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


	public function getBackupTarget(): BackupTarget
	{
	}

}
