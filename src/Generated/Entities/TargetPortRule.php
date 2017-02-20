<?php
namespace SamIT\Rancher\Generated\Entities;

class TargetPortRule extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $backendName;

	/** @var string */
	public $hostname;

	/** @var string */
	public $path;

	/** @var int */
	public $targetPort;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/targetportrule'];

}
