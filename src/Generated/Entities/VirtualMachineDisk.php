<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class VirtualMachineDisk extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['driver', 'name', 'opts', 'readIops', 'root', 'size', 'writeIops'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $driver;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $opts = [];

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
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $root;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $size;

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/virtualmachinedisk',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $driver, array $opts, \boolean $root, string $size)
	{
		$result = new static();
		$result->driver = $driver;
		$result->opts = $opts;
		$result->root = $root;
		$result->size = $size;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getDriver(): string
	{
		return $this->driver;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getOpts(): array
	{
		return $this->opts;
	}


	/**
	 * @simple-getter
	 */
	public function getReadIops(): int
	{
		return $this->readIops;
	}


	/**
	 * @simple-getter
	 */
	public function getRoot(): \boolean
	{
		return $this->root;
	}


	/**
	 * @simple-getter
	 */
	public function getSize(): string
	{
		return $this->size;
	}


	/**
	 * @simple-getter
	 */
	public function getWriteIops(): int
	{
		return $this->writeIops;
	}

}
