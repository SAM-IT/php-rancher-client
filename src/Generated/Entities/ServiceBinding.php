<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class ServiceBinding extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['labels', 'ports'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $labels = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $ports = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicebinding'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $labels, array $ports)
	{
		$result = new static();
		$result->labels = $labels;
		$result->ports = $ports;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getLabels(): array
	{
		return $this->labels;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getPorts(): array
	{
		return $this->ports;
	}

}
