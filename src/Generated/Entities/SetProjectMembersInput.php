<?php
namespace SamIT\Rancher\Generated\Entities;

use SamIT\Rancher\Generated\Client;

class SetProjectMembersInput extends \SamIT\Rancher\Types\Entity
{
	/** @var string[] The list of fields for this type. */
	protected const RESOURCE_FIELDS = ['members'];

	/**
	 * @api-update false
	 * @api-create true
	 * @api-nullable false
	 * @api-type array[projectMember]
	 * @var ProjectMember[]
	 */
	protected $members = [];

	/** @var string[] */
	public static $entityLinks = [
		'self' => 'https://rancher.sam-it.eu/v2-beta/schemas/setprojectmembersinput',
	];


	protected function client(): Client
	{
		return parent::client();
	}


	public static function create(array $members)
	{
		$result = new static();
		$result->members = $members;
		return $result;
	}


	/**
	 * @simple-getter
	 * @api-type array[projectMember]
	 * @return ProjectMember[]
	 */
	public function getMembers(): array
	{
		return $this->members;
	}

}
