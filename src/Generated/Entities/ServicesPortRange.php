<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ServicesPortRange extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['endPort', 'startPort'];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $endPort;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $startPort;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicesportrange',
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
	 */
	public function getEndPort(): int
	{
		return $this->endPort;
	}


	public function setEndPort(int $value = NULL)
	{
		$this->endPort = $value;
	}


	/**
	 * @simple-getter
	 */
	public function getStartPort(): int
	{
		return $this->startPort;
	}


	public function setStartPort(int $value = NULL)
	{
		$this->startPort = $value;
	}

}
