<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class AddOutputsInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['outputs'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type map[string]
	 * @var string[]
	 */
	protected $outputs = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/addoutputsinput'];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $outputs)
	{
		$result = new static();
		$result->outputs = $outputs;
		return $result;
	}


	/**
	 * @simple-getter
	 * @return string[]
	 */
	public function getOutputs(): array
	{
		return $this->outputs;
	}

}
