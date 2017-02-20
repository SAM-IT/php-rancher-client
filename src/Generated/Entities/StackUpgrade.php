<?php
namespace SamIT\Rancher\Generated\Entities;

class StackUpgrade extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $dockerCompose;

	/** @var string */
	public $rancherCompose;

	/** @var string */
	public $externalId;

	/** @var StringMap */
	public $environment = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/stackupgrade'];

}
