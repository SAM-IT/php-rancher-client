<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Enums\StateEnum;
use SamIT\Rancher\Generated\Enums\TransitioningEnum;

class Project extends Account
{
	/**
	 * @var string
	 * @api-type reference[network]
	 */
	public $defaultNetworkId;

	/** @var string */
	public $healthState;

	/**
	 * @var string
	 * @api-type reference[projectTemplate]
	 */
	public $projectTemplateId;

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
