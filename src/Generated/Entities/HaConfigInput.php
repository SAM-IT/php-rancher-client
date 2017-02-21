<?php
namespace SamIT\Rancher\Generated\Entities;

class HaConfigInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'cert',
		'certChain',
		'clusterSize',
		'hostRegistrationUrl',
		'httpEnabled',
		'httpPort',
		'httpsPort',
		'key',
		'ppHttpPort',
		'ppHttpsPort',
		'redisPort',
		'swarmEnabled',
		'swarmPort',
		'zookeeperClientPort',
		'zookeeperLeaderPort',
		'zookeeperQuorumPort',
	];

	/** @var string */
	public $cert;

	/** @var string */
	public $certChain;

	/** @var int */
	public $clusterSize;

	/** @var string */
	public $hostRegistrationUrl;

	/** @var boolean */
	public $httpEnabled;

	/** @var int */
	public $httpPort;

	/** @var int */
	public $httpsPort;

	/** @var string */
	public $key;

	/** @var int */
	public $ppHttpPort;

	/** @var int */
	public $ppHttpsPort;

	/** @var int */
	public $redisPort;

	/** @var boolean */
	public $swarmEnabled;

	/** @var int */
	public $swarmPort;

	/** @var int */
	public $zookeeperClientPort;

	/** @var int */
	public $zookeeperLeaderPort;

	/** @var int */
	public $zookeeperQuorumPort;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/haconfiginput',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/haconfiginputs',
	];

}
