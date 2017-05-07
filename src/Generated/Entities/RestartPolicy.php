<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class RestartPolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['maximumRetryCount', 'name'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type int
	 * @var int
	 */
	protected $maximumRetryCount;

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/restartpolicy'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(int $maximumRetryCount, string $name)
	{
		$result = new static();
		$result->maximumRetryCount = $maximumRetryCount;
		$result->name = $name;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getMaximumRetryCount(): int
	{
		return $this->maximumRetryCount;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	public function setName(string $value)
	{
		$this->name = $value;
	}

}
