<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Image;

class ImageCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Image::class;
	}


	public function first(): ?Image
	{
		return $this->data[0];
	}

}
