<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ContainerLogs extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['follow', 'lines'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type boolean
	 * @var boolean
	 */
	protected $follow;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $lines;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerlogs'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(\boolean $follow)
	{
		$result = new static();
		$result->follow = $follow;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type boolean
	 */
	public function getFollow(): \boolean
	{
		return $this->follow;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getLines(): ?int
	{
		return $this->lines;
	}

}
