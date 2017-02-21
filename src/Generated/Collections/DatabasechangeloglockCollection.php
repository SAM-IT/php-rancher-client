<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\Databasechangeloglock;

class DatabasechangeloglockCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = Databasechangeloglock::class;
	}


	public function first(): ?Databasechangeloglock
	{
		return $this->data[0];
	}

}
