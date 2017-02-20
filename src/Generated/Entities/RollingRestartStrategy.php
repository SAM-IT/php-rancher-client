<?php
namespace SamIT\Rancher\Generated\Entities;

class RollingRestartStrategy extends \SamIT\Rancher\Types\Entity
{
	/** @var int */
	public $batchSize;

	/** @var int */
	public $intervalMillis;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/rollingrestartstrategy',
	];

}
