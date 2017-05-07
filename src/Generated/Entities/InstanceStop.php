<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class InstanceStop extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['remove', 'timeout'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $remove;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $timeout;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/instancestop'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $remove, int $timeout)
	{
		$result = new static();
		$result->remove = $remove;
		$result->timeout = $timeout;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getRemove(): \boolean
	{
		return $this->remove;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getTimeout(): int
	{
		return $this->timeout;
	}

}
