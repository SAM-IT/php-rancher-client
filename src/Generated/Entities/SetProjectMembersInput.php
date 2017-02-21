<?php
namespace SamIT\Rancher\Generated\Entities;

class SetProjectMembersInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['members'];

	/** @var projectMember[] */
	public $members = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/setprojectmembersinput',
	];

}
