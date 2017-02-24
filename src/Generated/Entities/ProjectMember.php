<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Collections\ProjecCollection;
use SamIT\Rancher\Generated\Enums\ExternalIdTypeEnum;
use SamIT\Rancher\Generated\Enums\RoleEnum;
use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class ProjectMember extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = [
		'created',
		'data',
		'description',
		'externalId',
		'externalIdType',
		'id',
		'kind',
		'name',
		'projectId',
		'removeTime',
		'removed',
		'role',
		'state',
		'uuid',
		'transitioning',
		'transitioningMessage',
		'transitioningProgress',
	];

	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/** @var string */
	public $description;

	/** @var string */
	public $externalId;

	/** @var ExternalIdTypeEnum */
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

	/** @var RoleEnum */
	public $role;

	/** @var StateEnum */
	public $state;

	/** @var string */
	public $uuid;

	/** @var TransitioningEnum */
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


	public function getProject(): ProjecCollection
	{
		return $this->client->retrieveEntities($this->links['project']);
	}

}
