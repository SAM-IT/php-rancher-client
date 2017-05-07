<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\ProjectMember;

class ProjectMemberMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = ProjectMember::class;
	}


	public function get(string $key): ?ProjectMember
	{
		return $this->data[0];
	}

}
