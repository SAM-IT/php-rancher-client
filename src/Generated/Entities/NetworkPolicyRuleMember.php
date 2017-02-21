<?php
namespace SamIT\Rancher\Generated\Entities;

class NetworkPolicyRuleMember extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['selector'];

	/** @var string */
	public $selector;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrulemember',
	];

}
