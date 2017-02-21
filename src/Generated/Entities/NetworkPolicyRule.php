<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\ActionEnum;
use SamIT\Rancher\Generated\Enums\WithinEnum;

class NetworkPolicyRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['action', 'between', 'from', 'ports', 'to', 'within'];

	/** @var ActionEnum */
	public $action;

	/** @var networkPolicyRuleBetween */
	public $between;

	/** @var networkPolicyRuleMember */
	public $from;

	/** @var string[] */
	public $ports = [];

	/** @var networkPolicyRuleMember */
	public $to;

	/** @var WithinEnum */
	public $within;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrule',
	];

}
