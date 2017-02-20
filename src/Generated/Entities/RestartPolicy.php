<?php
namespace SamIT\Rancher\Generated\Entities;

class RestartPolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $maximumRetryCount;

	/** @var string */
	public $name;

	/** @var string[] */
	public static $entityLinks = ['self' => 'https://rancher.sam-it.eu/v2-beta/schemas/restartpolicy'];

}
