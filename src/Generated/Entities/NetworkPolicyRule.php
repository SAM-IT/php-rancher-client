<?php
namespace SamIT\Rancher\Generated\Entities;

class NetworkPolicyRule extends \SamIT\Rancher\Types\Entity
{
	/** @var \SamIT\Rancher\Generated\Enums\ActionEnum */
	public $action;

	/** @var networkPolicyRuleBetween */
	public $between;

	/** @var networkPolicyRuleMember */
	public $from;

	/** @var string[] */
	public $ports = [];

	/** @var networkPolicyRuleMember */
	public $to;

	/** @var \SamIT\Rancher\Generated\Enums\WithinEnum */
	public $within;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrule',
	];

}
