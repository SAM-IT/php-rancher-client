<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;
use SamIT\Rancher\Generated\Enums\ActionEnum;
use SamIT\Rancher\Generated\Enums\WithinEnum;

class NetworkPolicyRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['action', 'between', 'from', 'ports', 'to', 'within'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var ActionEnum
	 */
	protected $action;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type networkPolicyRuleBetween
	 * @var NetworkPolicyRuleBetween
	 */
	protected $between;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type networkPolicyRuleMember
	 * @var NetworkPolicyRuleMember
	 */
	protected $from;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[string]
	 * @var string[]
	 */
	protected $ports = [];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type networkPolicyRuleMember
	 * @var NetworkPolicyRuleMember
	 */
	protected $to;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type enum
	 * @var WithinEnum
	 */
	protected $within;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrule',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(ActionEnum $action, \NetworkPolicyRuleBetween $between, \NetworkPolicyRuleMember $from, array $ports, \NetworkPolicyRuleMember $to, WithinEnum $within)
	{
		$result = new static();
		$result->action = $action;
		$result->between = $between;
		$result->from = $from;
		$result->ports = $ports;
		$result->to = $to;
		$result->within = $within;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return ActionEnum
	 */
	public function getAction(): ActionEnum
	{
		return $this->action;
	}


	/**
	 * @simple-getter
	 * @api-type networkPolicyRuleBetween
	 * @return NetworkPolicyRuleBetween
	 */
	public function getBetween(): NetworkPolicyRuleBetween
	{
		return $this->between;
	}


	/**
	 * @simple-getter
	 * @api-type networkPolicyRuleMember
	 * @return NetworkPolicyRuleMember
	 */
	public function getFrom(): NetworkPolicyRuleMember
	{
		return $this->from;
	}


	/**
	 * @simple-getter
	 * @api-type array[string]
	 * @return string[]
	 */
	public function getPorts(): array
	{
		return $this->ports;
	}


	/**
	 * @simple-getter
	 * @api-type networkPolicyRuleMember
	 * @return NetworkPolicyRuleMember
	 */
	public function getTo(): NetworkPolicyRuleMember
	{
		return $this->to;
	}


	/**
	 * @simple-getter
	 * @api-type enum
	 * @return WithinEnum
	 */
	public function getWithin(): WithinEnum
	{
		return $this->within;
	}

}
