<?php
namespace SamIT\Rancher\Generated\Entities;

class MountEntry extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['instanceId', 'instanceName', 'path', 'volumeId', 'volumeName'];

	/**
	 * @var string
	 * @api-type reference[instance]
	 */
	public $instanceId;

	/** @var string */
	public $instanceName;

	/** @var string */
	public $path;

	/**
	 * @var string
	 * @api-type reference[volume]
	 */
	public $volumeId;

	/** @var string */
	public $volumeName;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/mountentry'];


	public function getInstance(): Instance
	{
	}


	public function getVolume(): Volume
	{
	}

}
