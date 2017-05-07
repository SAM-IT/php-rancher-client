<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class NetworkPolicyRuleBetween extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['groupBy', 'selector'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $groupBy;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $selector;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrulebetween',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $groupBy, string $selector)
	{
		$result = new static();
		$result->groupBy = $groupBy;
		$result->selector = $selector;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getGroupBy(): string
	{
		return $this->groupBy;
	}


	/**
	 * @simple-getter
	 * @api-type string
	 */
	public function getSelector(): string
	{
		return $this->selector;
	}

}
