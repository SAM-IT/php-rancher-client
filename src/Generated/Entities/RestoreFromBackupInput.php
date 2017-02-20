<?php
namespace SamIT\Rancher\Generated\Entities;

class RestoreFromBackupInput extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[backup]
	 */
	public $backupId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/restorefrombackupinput',
	];


	public function getBackup(): Backup
	{
	}

}