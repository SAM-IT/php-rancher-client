<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class RestoreFromBackupInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['backupId'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type reference[backup]
	 * @var string
	 */
	protected $backupId;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/restorefrombackupinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\Backup $backupId)
	{
		$result = new static();
		$result->backupId = $backupId;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type reference[backup]
	 * @return string
	 */
	public function getBackupId(): string
	{
		return $this->backupId;
	}


	/**
	 * --> getter from reference: reference[backup]
	 */
	public function getBackup(): ?Backup
	{
		return $this->client()->getBackup($this->backupId);
	}

}
