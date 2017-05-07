<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class TargetPortRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['backendName', 'hostname', 'path', 'targetPort'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $backendName;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $hostname;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $path;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type int
	 * @var int
	 */
	protected $targetPort;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/targetportrule'];


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
	 * @api-type string
	 */
	public function getBackendName(): ?string
	{
		return $this->backendName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getHostname(): ?string
	{
		return $this->hostname;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPath(): ?string
	{
		return $this->path;
	}


	/**
	 * @simple-getter
	 * @api-type int
	 */
	public function getTargetPort(): ?int
	{
		return $this->targetPort;
	}

}
