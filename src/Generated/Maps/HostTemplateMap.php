<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\HostTemplate;

class HostTemplateMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = HostTemplate::class;
	}


	public function get(string $key): ?HostTemplate
	{
		return $this->data[0];
	}

}
