<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class LoadBalancerService extends Service
{
	/** @var lbConfig */
	public $lbConfig;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/loadbalancerservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/loadbalancerservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
