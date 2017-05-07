<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class SnapshotBackupInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['backupTargetId', 'name'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[backupTarget]
	 * @var string
	 */
	protected $backupTargetId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/snapshotbackupinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\BackupTarget $backupTargetId)
	{
		$result = new static();
		$result->backupTargetId = $backupTargetId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[backupTarget]
	 * @return string
	 */
	public function getBackupTargetId(): string
	{
		return $this->backupTargetId;
	}


	/**
	 * --> getter from reference: reference[backupTarget]
	 */
	public function getBackupTarget(): ?BackupTarget
	{
		return $this->client()->getBackupTarget($this->backupTargetId);
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

}
