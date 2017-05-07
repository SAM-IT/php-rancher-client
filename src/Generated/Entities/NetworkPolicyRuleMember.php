<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class NetworkPolicyRuleMember extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['selector'];

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
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrulemember',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $selector)
	{
		$result = new static();
		$result->selector = $selector;
		return $result;
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
