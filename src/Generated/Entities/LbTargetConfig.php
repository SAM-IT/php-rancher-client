<?php
namespace SamIT\Rancher\Generated\Entities;

class LbTargetConfig extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['portRules'];

	/** @var targetPortRule[] */
	public $portRules = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/lbtargetconfig'];

}
