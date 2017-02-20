<?php
namespace SamIT\Rancher\Generated\Entities;

class ContainerLogs extends \SamIT\Rancher\Types\Entity
{
	/** @var boolean */
	public $follow;

	/** @var int */
	public $lines;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/containerlogs'];

}
