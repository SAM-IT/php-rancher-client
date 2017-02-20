<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerProxy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $port;

	/** @var \SamIT\Rancher\Generated\Enums\SchemeEnum */
	public $scheme;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerproxy'];

}
