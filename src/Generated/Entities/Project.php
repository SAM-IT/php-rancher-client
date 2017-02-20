<?php
namespace SamIT\Rancher\Generated\Entities;

class Project extends \SamIT\Rancher\Types\Entity
{
	/** @var date */
	public $created;

	/** @var JsonMap */
	public $data = [];

	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $defaultNetworkId;

	/** @var string */
	public $description;

	/** @var string */
	public $healthState;

	/** @var int */
	public $id;

	/** @var string */
	public $kind;

	/** @var string */
	public $name;

	/**
	 * @var string
	 * @api-type reference[projectTemplate]
	 */
	public $projectTemplateId;

	/** @var date */
	public $removeTime;

	/** @var date */
	public $removed;

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
	public $version;

	/** @var boolean */
	public $allowSystemRole;

	/** @var projectMember[] */
	public $members = [];

	/** @var string */
	public $orchestration;

	/** @var boolean */
	public $virtualMachine;

	/** @var servicesPortRange */
	public $servicesPortRange;

	/** @var reference[project][] */
	public $projectLinks = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/project',
		'collection' => 'https://rancher.sam-it.eu/v2-beta/projects',
	];


	public function getDefaultNetwork(): DefaultNetwork
	{
	}


	public function getProjectTemplate(): ProjectTemplate
	{
	}

}
