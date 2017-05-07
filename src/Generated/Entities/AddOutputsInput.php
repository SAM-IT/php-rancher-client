<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Types\StringMap;

class AddOutputsInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['outputs'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var \\SamIT\Rancher\Types\StringMap
	 */
	protected $outputs = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/addoutputsinput'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(StringMap $outputs)
	{
		$result = new static();
		$result->outputs = $outputs;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type map[string]
	 * @return \\SamIT\Rancher\Types\StringMap
	 */
	public function getOutputs(): \SamIT\Rancher\Types\StringMap
	{
		return $this->outputs;
	}

}
