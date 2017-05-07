<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\VolumeTemplate;

class VolumeTemplateMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = VolumeTemplate::class;
	}


	public function get(string $key): ?VolumeTemplate
	{
		return $this->data[0];
	}

}
