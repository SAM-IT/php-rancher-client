<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class NetworkDriverService extends Service
{
	/** @var networkDriver */
	public $networkDriver;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/networkdriverservice',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/networkdriverservices',
	];


	public function getAccount(): Account
	{
	}


	public function getStack(): Stack
	{
	}

}
