<?php
namespace SamIT\Rancher\Generated\Entities;

class Identity extends \SamIT\Rancher\Types\Entity
{
	/** @var string */
	public $all;

	/** @var string */
	public $externalId;

	/** @var string */
	public $externalIdType;

	/** @var string */
	public $id;

	/** @var string */
	public $login;

	/** @var string */
	public $name;

	/** @var string */
	public $profilePicture;

	/** @var string */
	public $profileUrl;

	/**
	 * @var string
	 * @api-type reference[project]
	 */
	public $projectId;

	/** @var string */
	public $role;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/identity',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/identities',
	];


	public function getProject(): Project
	{
	}

}
