<?php
namespace SamIT\Rancher\Generated\Entities;

class ServiceBinding extends \SamIT\Rancher\Types\Entity
{
	/** @var StringMap */
	public $labels = [];

	/** @var string[] */
	public $ports = [];

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/servicebinding'];

}
