<?php
namespace SamIT\Rancher\Generated\Entities;

class ProjectMember extends \SamIT\Rancher\Types\Entity
{
	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var \SamIT\Rancher\Generated\Enums\ExternalIdTypeEnum */
	public $externalIdType;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[project]
	 */
	public $projectId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

	/** @var \SamIT\Rancher\Generated\Enums\RoleEnum */
	public $role;

	/** @var \SamIT\Rancher\Generated\Enums\StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var \SamIT\Rancher\Generated\Enums\TransitioningEnum */
	public $transitioning;

	/** @var string */
	public $transitioningMessage;

	/** @var int */
	public $transitioningProgress;

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/projectmember',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/projectmembers',
	];


	public function getProject(): Project
	{
	}

}
