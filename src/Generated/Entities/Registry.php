<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Registry extends StoragePool
{
	/** @var string */
	public $serverAddress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/registry',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/registries',
	];


	public function getAccount(): Account
	{
	}

}
