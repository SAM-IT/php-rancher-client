<?php
namespace SamIT\Rancher\Generated\Entities;

class PacketConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['apiKey', 'billingCycle', 'facilityCode', 'os', 'plan', 'projectId'];

	/** @var string */
	public $apiKey;

	/** @var string */
	public $billingCycle;

	/** @var string */
	public $facilityCode;

	/** @var string */
	public $os;

	/** @var string */
	public $plan;

	/** @var string */
	public $projectId;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/packetconfig'];

}
