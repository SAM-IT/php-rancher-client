<?php
namespace SamIT\Rancher\Generated\Entities;

class ProcessSummary extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['delay', 'processName', 'ready', 'running'];

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
