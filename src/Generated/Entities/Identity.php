<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class Identity extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'all',
		'externalId',
		'externalIdType',
		'id',
		'login',
		'name',
		'profilePicture',
		'profileUrl',
		'projectId',
		'role',
	];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $all;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $externalId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type string
	 * @var string
	 */
	protected $externalIdType;

	/**
	 * @api-update false
	 * @api-create false
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $id;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $login;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $name;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $profilePicture;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $profileUrl;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type reference[project]
	 * @var string
	 */
	protected $projectId;

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable true
	 * @api-type string
	 * @var string
	 */
	protected $role;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/identity',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/identities',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(string $externalId, string $externalIdType)
	{
		$result = new static();
		$result->externalId = $externalId;
		$result->externalIdType = $externalIdType;
		return $result;
	}


	/**
	 * @simple-getter
	 */
	public function getAll(): string
	{
		return $this->all;
	}


	/**
	 * @simple-getter
	 */
	public function getExternalId(): string
	{
		return $this->externalId;
	}


	/**
	 * @simple-getter
	 */
	public function getExternalIdType(): string
	{
		return $this->externalIdType;
	}


	/**
	 * @simple-getter
	 */
	public function getId(): string
	{
		return $this->id;
	}


	/**
	 * @simple-getter
	 */
	public function getLogin(): string
	{
		return $this->login;
	}


	/**
	 * @simple-getter
	 */
	public function getName(): string
	{
		return $this->name;
	}


	/**
	 * @simple-getter
	 */
	public function getProfilePicture(): string
	{
		return $this->profilePicture;
	}


	/**
	 * @simple-getter
	 */
	public function getProfileUrl(): string
	{
		return $this->profileUrl;
	}


	/**
	 * @simple-getter
	 * @return string
	 */
	public function getProjectId(): string
	{
		return $this->projectId;
	}


	/**
	 * --> getter from reference: reference[project]
	 */
	public function getProject(): ?Project
	{
		return $this->client()->getProject($this->projectId);
	}


	/**
	 * @simple-getter
	 */
	public function getRole(): string
	{
		return $this->role;
	}

}
