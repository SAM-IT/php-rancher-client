<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceRestart extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['rollingRestartStrategy'];

	/** @var rollingRestartStrategy */
	public $rollingRestartStrategy;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicerestart'];

}
