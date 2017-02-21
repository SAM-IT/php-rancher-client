<?php
namespace SamIT\Rancher\Generated\Collections;

use SamIT\Rancher\Generated\Entities\DnsService;

class DnsServiceCollection extends \SamIT\Rancher\Types\Collection
{

	public function __construct()
	{
		$this->resourceClass = DnsService::class;
	}


	public function first(): ?DnsService
	{
		return $this->data[0];
	}

}
