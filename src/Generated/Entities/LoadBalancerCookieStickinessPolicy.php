<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\ModeEnum;

class LoadBalancerCookieStickinessPolicy extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $cookie;

	/** @var string */
	public $domain;

	/** @var boolean */
	public $indirect;

	/** @var ModeEnum */
	public $mode;

	/** @var string */
	public $name;

	/** @var boolean */
	public $nocache;

	/** @var boolean */
	public $postonly;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/loadbalancercookiestickinesspolicy',
	];

}
