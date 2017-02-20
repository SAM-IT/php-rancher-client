<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessSummary extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $delay;

	/** @var string */
	public $processName;

	/** @var int */
	public $ready;

	/** @var int */
	public $running;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/processsummary',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/processsummary',
	];

}
