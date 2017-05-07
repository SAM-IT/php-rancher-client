<?php
namespace SamIT\Rancher\Generated\Maps;

use SamIT\Rancher\Generated\Entities\DnsService;

class DnsServiceMap extends \SamIT\Rancher\Types\EntityMap
{

	public function __construct()
	{
		$this->resourceClass = DnsService::class;
	}


	public function get(string $key): ?DnsService
	{
		return $this->data[0];
	}

}
