<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Register extends GenericObject
{
	/** @var string */
	public $accessKey;

	/** @var string */
	public $secretKey;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/register',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/register',
	];


	public function getAccount(): Account
	{
	}

}
