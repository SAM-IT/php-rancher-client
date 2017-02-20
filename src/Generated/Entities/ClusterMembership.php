<?php
namespace SamIT\Rancher\Generated\Entities;

class ClusterMembership extends \SamIT\Rancher\Types\Entity
{
	/** @var boolean */
	public $clustered;

	/** @var string */
	public $config;

	/** @var int */
	public $heartbeat;

	/** @var int */
	public $id;

	/** @var string */
	public $name;

	/** @var string */
	public $uuid;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/clustermembership',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/clustermemberships',
	];

}
