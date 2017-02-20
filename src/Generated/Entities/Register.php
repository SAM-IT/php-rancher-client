<?php
namespace SamIT\Rancher\Generated\Entities;

class Register extends \SamIT\Rancher\Types\Entity
{
	/**
	 * @var string
	 * @api-type reference[account]
	 */
	public $accountId;

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var int */
	public $id;

	/** @var string */
	public $key;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var JsonMap */
	public $resourceData = [];

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string */
	public $uuid;

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
