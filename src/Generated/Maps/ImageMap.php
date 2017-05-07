<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\Image;

class ImageMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = Image::class;
	}


	public function get(string $key): ?Image
	{
		return $this->data[0];
	}

}
