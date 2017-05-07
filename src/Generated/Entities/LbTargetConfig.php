<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class LbTargetConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['portRules'];

	/**
	 * @api-update true
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[targetPortRule]
	 * @var TargetPortRule[]
	 */
	protected $portRules = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/lbtargetconfig'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $portRules)
	{
		$result = new static();
		$result->portRules = $portRules;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type array[targetPortRule]
	 * @return TargetPortRule[]
	 */
	public function getPortRules(): array
	{
		return $this->portRules;
	}


	public function setPortRules(array $value)
	{
		$this->portRules = $value;
	}

}
