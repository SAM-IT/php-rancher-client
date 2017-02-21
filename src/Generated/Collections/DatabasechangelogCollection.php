<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Databasechangelog;

class DatabasechangelogCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Databasechangelog::class;
	}


	public function first(): ?Databasechangelog
	{
		return $this->data[0];
	}

}
