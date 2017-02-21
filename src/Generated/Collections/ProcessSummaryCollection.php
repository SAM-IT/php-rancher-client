<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\ProcessSummary;

class ProcessSummaryCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = ProcessSummary::class;
	}


	public function first(): ?ProcessSummary
	{
		return $this->data[0];
	}

}
