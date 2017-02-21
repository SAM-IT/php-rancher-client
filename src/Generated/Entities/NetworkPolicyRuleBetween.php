<?php
namespace SamIT\Rancher\Generated\Entities;

class NetworkPolicyRuleBetween extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['groupBy', 'selector'];

	/** @var string */
	public $groupBy;

	/** @var string */
	public $selector;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkpolicyrulebetween',
	];

}
