<?php
namespace SamIT\Rancher\Generated\Entities;

class KubernetesStackUpgrade extends \SamIT\Rancher\Types\Entity
{
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
