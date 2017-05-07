<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class MountEntry extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['instanceId', 'instanceName', 'path', 'volumeId', 'volumeName'];

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type reference[instance]
	 * @var string
	 */
	protected $instanceId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $instanceName;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $path;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type reference[volume]
	 * @var string
	 */
	protected $volumeId;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $volumeName;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/mountentry'];


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
	 * @api-type reference[instance]
	 * @return string
	 */
	public function getInstanceId(): string
	{
		return $this->instanceId;
	}


	/**
	 * --> getter from reference: reference[instance]
	 */
	public function getInstance(): ?Instance
	{
		return $this->client()->getInstance($this->instanceId);
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getInstanceName(): string
	{
		return $this->instanceName;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getPath(): string
	{
		return $this->path;
	}


	/**
	 * @simple-getter
	 * @api-type reference[volume]
	 * @return string
	 */
	public function getVolumeId(): string
	{
		return $this->volumeId;
	}


	/**
	 * --> getter from reference: reference[volume]
	 */
	public function getVolume(): ?Volume
	{
		return $this->client()->getVolume($this->volumeId);
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getVolumeName(): string
	{
		return $this->volumeName;
	}

}
