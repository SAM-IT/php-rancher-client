<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ServiceLog;

class ServiceLogCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ServiceLog::class;
	}


	public function first(): ?ServiceLog
	{
		return $this->data[0];
	}

}
