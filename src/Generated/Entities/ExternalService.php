<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ExternalService extends Service
{
	/** @var string[] */
	public $externalIpAddresses = [];

	/** @var string */
	public $hostname;

	/** @var instanceHealthCheck */
	public $healthCheck;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/externalservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/externalservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
