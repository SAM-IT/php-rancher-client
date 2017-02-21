<?php
namespace SamIT\Rancher\Generated\Entities;

class KubernetesStackUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['templates', 'externalId', 'environment'];

	/** @var StringMap */
	public $templates = [];

	/** @var string */
	public $externalId;

	/** @var StringMap */
	public $environment = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/kubernetesstackupgrade',
	];

}
