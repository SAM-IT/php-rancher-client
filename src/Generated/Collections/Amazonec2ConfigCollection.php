<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Amazonec2Config;

class Amazonec2ConfigCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Amazonec2Config::class;
	}


	public function first(): ?Amazonec2Config
	{
		return $this->data[0];
	}

}
