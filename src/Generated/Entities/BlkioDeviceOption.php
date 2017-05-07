<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class BlkioDeviceOption extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['readBps', 'readIops', 'weight', 'writeBps', 'writeIops'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $readBps;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $readIops;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $weight;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $writeBps;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $writeIops;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/blkiodeviceoption',
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
	 * @api-type int
	 */
	public function getReadBps(): ?int
	{
		return $this->readBps;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getReadIops(): ?int
	{
		return $this->readIops;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getWeight(): ?int
	{
		return $this->weight;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getWriteBps(): ?int
	{
		return $this->writeBps;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getWriteIops(): ?int
	{
		return $this->writeIops;
	}

}
